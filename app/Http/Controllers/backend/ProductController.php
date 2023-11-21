<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Testproduct;
use App\Models\Product;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Subsubcategory;
use App\Models\Brand;
use App\Models\Color;
use App\Models\Status;
use Session;

class ProductController extends Controller
{
        public function index() {
            $indexproduct = Product::join('categories', 'products.category_id', '=', 'categories.category_id')
                                    ->join('subcategories', 'products.subcategory_id', '=', 'subcategories.subcategory_id')
                                    ->join('subsubcategories', 'products.subsubcategory_id', '=', 'subsubcategories.subsubcategory_id')
                                    ->join('brands', 'products.brand_id', '=', 'brands.brand_id')
                                    ->join('colors', 'products.color_id', '=', 'colors.color_id')
                                    ->join('statuses', 'products.product_status', '=', 'statuses.id')
                                    ->get();
            return view('backend/product/index', compact('indexproduct'));
        }
    
        public function create(Request $request){
            $indexData['indexcategory']=Category::all();
            $indexData['indexbrand']= Brand::all();      
            $indexData['indexcolor']= Color::all(); 
            return view('backend/product/create', $indexData);
        }
        public function subcategory(Request $request){
            $cate_id = $request->post('cate_id');//category id
            $indexsubcategory = DB::table('subcategories')->where('category_id', $cate_id)->get();
            $html = '<option value="">Select State</option>';
            foreach($indexsubcategory as $itemsubcategory){
                $html .= '<option value="'.$itemsubcategory->subcategory_id.'">'.$itemsubcategory->subcategory_name.'</option>';
            }
            return $html;
        }

        public function subsubcategory(Request $request){
            $sub_id = $request->post('sub_id'); //subcategory id
            $indexsubsubcategory = DB::table('subsubcategories')->where('subcategory_id', $sub_id)->get();
            $html = '<option value="">Select City</option>';
            foreach ($indexsubsubcategory as $itemsubsubcategory){
                $html .= '<option value="'.$itemsubsubcategory->subsubcategory_id.'">'.$itemsubsubcategory->subsubcategory_name.'</option>';
            }
            return $html;
        }

        public function store(Request $request){
            $rules = [
                'category_name' => 'required | max:50',
                'subcategory_name' => 'required | max:50',
                'subsubcategory_name' => 'required | max:50',
                'brand_name' => 'required | max:50',
                'color_name' => 'required | max:50',
                'product_name' => 'required | max:50',
                'product_des' => 'required | max:255',
                'buying_price' => 'required | max:50',
                'selling_price' => 'required | max:50',
                'product_sku' => 'required | max:50',
                'product_img' => 'required | max:255',

            ];
            $v_msg=[
                'category_name.required'=> 'Please enter category',
                'subcategory_name.required'=> 'Please enter sub category',
                'subsubcategory_name.required'=> 'Please enter SubSubcategory',
                'product_name.required'=> 'Please enter product',
                'brand_name.required'=> 'Please enter brand',
                'color_name.required'=> 'Please enter color',
                'product_name.required'=> 'Please enter product',
                'product_des.required'=> 'Please enter decription',
                'buying_price.required'=> 'Please enter product Buying Price',
                'selling_price.required'=> 'Please enter product Selling Price',
                'product_sku.required'=> 'Please enter product SKU',
                'product_img.required'=> 'Please enter product image',
            ];
            $this -> validate($request, $rules, $v_msg);

            $imageName = time().'.'. $request->product_img->extension();
            $request->product_img->move(public_path('images'),$imageName);

            $data= new Product();
            $data->category_id= $request->category_name;
            $data->subcategory_id= $request->subcategory_name;
            $data->subsubcategory_id= $request->subsubcategory_name;
            $data->brand_id= $request->brand_name;
            $data->color_id= $request->color_name;
            $data->product_name= $request->product_name;
            $data->product_des= $request->product_des;
            $data->buying_price= $request->buying_price;
            $data->selling_price= $request->selling_price;
            $data->product_sku= $request->product_sku;
            $data->product_img= $imageName;
            $data->save();
            Session::flash('msg','Data submit successfully');
            return redirect()->route('product.index');
        }

        public function edit($product_id=null){
            $indexData['indexData'] = Product::find($product_id);
            $indexData['indexcategory']= Category::all();      
            $indexData['indexsubcategory']= Subcategory::all();      
            $indexData['indexsubsubcategory']= Subsubcategory::all();      
            $indexData['indexbrand']= Brand::all();      
            $indexData['indexcolor']= Color::all();
            $indexData['indexStatus']= Status::all();      
            return view('backend/product/edit', $indexData);
        }
        
        public function update(Request $request, $product_id){
            $rules = [
                'category_name' => 'required | max:50',
                'subcategory_name' => 'required | max:50',
                'subsubcategory_name' => 'required | max:50',
                'brand_name' => 'required | max:50',
                'color_name' => 'required | max:50',
                'product_name' => 'required | max:50',
                'product_des' => 'required | max:255',
                'buying_price' => 'required | max:50',
                'selling_price' => 'required | max:50',
                'product_sku' => 'required | max:50',
            ];
            $v_msg=[
                'category_name.required'=> 'Please enter category',
                'subcategory_name.required'=> 'Please enter Subcategory',
                'subsubcategory_name.required'=> 'Please enter SubSubcategory',
                'brand_name.required'=> 'Please enter brand',
                'color_name.required'=> 'Please enter color',
                'product_name.required'=> 'Please enter product',
                'product_des.required'=> 'Please enter decription',
                'buying_price.required'=> 'Please enter product Buying Price',
                'selling_price.required'=> 'Please enter product Selling Price',
                'product_sku.required'=> 'Please enter product SKU',
            ];
            $this -> validate($request, $rules, $v_msg);

            $data= Product::find($product_id);
            $data->category_id= $request->category_name;
            $data->subcategory_id= $request->subcategory_name;
            $data->subsubcategory_id= $request->subsubcategory_name;
            $data->brand_id= $request->brand_name;
            $data->color_id= $request->color_name;
            $data->product_name= $request->product_name;
            $data->product_des= $request->product_des;
            $data->buying_price= $request->buying_price;
            $data->selling_price= $request->selling_price;
            $data->product_sku= $request->product_sku;
            if ($request->hasFile('product_img')) {
                $imageName = time().'.'.$request->product_img->extension();
                $request->product_img->move(public_path('images'), $imageName);
                $data->product_img = $imageName; // Update the image name
            }
            $data->product_status= $request->status;
            $data->save();
            Session::flash('msg','Data submit successfully');
            return redirect()->route('product.index');
        }


         public function show($product_id=null){
            $showData = Product::join('categories', 'products.category_id', '=', 'categories.category_id')
                                ->join('subcategories', 'products.subcategory_id', '=', 'subcategories.subcategory_id')
                                ->join('subsubcategories', 'products.subsubcategory_id', '=', 'subsubcategories.subsubcategory_id')
                                ->join('brands', 'products.brand_id', '=', 'brands.brand_id')
                                ->join('colors', 'products.color_id', '=', 'colors.color_id')
                                ->join('statuses', 'products.product_status', '=', 'statuses.id')->find($product_id);
            return view('backend/product/show', compact('showData'));
        }

        public function destroy($product_id=null){
            $destroyData = Product::find($product_id);

            // Delete associated image file
            if ($destroyData->product_img) {
                $imagePath = public_path('images/') . $destroyData->product_img; // Path to the image file
                if (file_exists($imagePath)) {
                    unlink($imagePath); // Remove the image file from the directory
                }
            }

            // Delete the product
            $destroyData->delete();

            Session::flash('msg','Data deleted successfully');
            return redirect()->route('product.index');
        }
}

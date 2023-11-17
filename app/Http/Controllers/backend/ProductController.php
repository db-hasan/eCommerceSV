<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Brand;
use App\Models\Unit;
use App\Models\Color;
use App\Models\Status;
use Session;

class ProductController extends Controller
{
    public function index() {
        $indexproduct = Product::join('categories', 'products.category_id', '=', 'categories.category_id')
                                ->join('subcategories', 'products.subcategory_id', '=', 'subcategories.subcategory_id')
                                ->join('brands', 'products.brand_id', '=', 'brands.brand_id')
                                ->join('units', 'products.unit_id', '=', 'units.unit_id')
                                ->join('colors', 'products.color_id', '=', 'colors.color_id')
                                ->join('statuses', 'products.product_status', '=', 'statuses.id')
                                ->get();
        return view('backend/product/index', compact('indexproduct'));
    }

    public function create(){
        $indexData['indexcategory']= Category::all();      
        $indexData['indexsubcategory']= Subcategory::all();      
        $indexData['indexbrand']= Brand::all();      
        $indexData['indexunit']= Unit::all();      
        $indexData['indexcolor']= Color::all();      
        return view('backend/product/create', $indexData);
    }
    public function store(Request $request){
        $rules = [
            'category_name' => 'required | max:50',
            'subcategory_name' => 'required | max:50',
            'brand_name' => 'required | max:50',
            'unit_name' => 'required | max:50',
            'color_name' => 'required | max:50',
            'product_name' => 'required | max:50',
            'product_des' => 'required | max:50',
            'product_sku' => 'required | max:50',
            'product_img' => 'required | max:255',
        ];
        $v_msg=[
            'category_name.required'=> 'Please enter category',
            'subcategory_name.required'=> 'Please enter sub category',
            'brand_name.required'=> 'Please enter brand',
            'unit_name.required'=> 'Please enter unit',
            'color_name.required'=> 'Please enter color',
            'product_name.required'=> 'Please enter product',
            'product_des.required'=> 'Please enter decription',
            'product_sku.required'=> 'Please enter product SKU',
            'product_img.required'=> 'Please enter product image',
        ];
        $this -> validate($request, $rules, $v_msg);

        $imageName = time().'.'. $request->product_img->extension();
        $request->product_img->move(public_path('images'),$imageName);

        $data= new Product();
        $data->category_id= $request->category_name;
        $data->subcategory_id= $request->subcategory_name;
        $data->brand_id= $request->brand_name;
        $data->unit_id= $request->unit_name;
        $data->color_id= $request->color_name;
        $data->product_name= $request->product_name;
        $data->product_des= $request->product_des;
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
        $indexData['indexbrand']= Brand::all();      
        $indexData['indexunit']= Unit::all();      
        $indexData['indexcolor']= Color::all();
        $indexData['indexStatus']= Status::all();      
        return view('backend/product/edit', $indexData);
    }
    
    public function update(Request $request, $product_id){
        $rules = [
            'category_name' => 'required | max:50',
            'subcategory_name' => 'required | max:50',
            'brand_name' => 'required | max:50',
            'unit_name' => 'required | max:50',
            'color_name' => 'required | max:50',
            'product_name' => 'required | max:50',
            'product_des' => 'required | max:50',
            'product_sku' => 'required | max:50',
            'product_img' => 'required | max:255',
        ];
        $v_msg=[
            'category_name.required'=> 'Please enter category',
            'subcategory_name.required'=> 'Please enter sub category',
            'brand_name.required'=> 'Please enter brand',
            'unit_name.required'=> 'Please enter unit',
            'color_name.required'=> 'Please enter color',
            'product_name.required'=> 'Please enter product',
            'product_des.required'=> 'Please enter decription',
            'product_sku.required'=> 'Please enter product SKU',
            'product_img.required'=> 'Please enter product image',
        ];
        $this -> validate($request, $rules, $v_msg);

        $imageName = time().'.'. $request->product_img->extension();
        $request->product_img->move(public_path('images'),$imageName);

        $data= Product::find($product_id);
        $data->category_id= $request->category_name;
        $data->subcategory_id= $request->subcategory_name;
        $data->brand_id= $request->brand_name;
        $data->unit_id= $request->unit_name;
        $data->color_id= $request->color_name;
        $data->product_name= $request->product_name;
        $data->product_des= $request->product_des;
        $data->product_sku= $request->product_sku;
        $data->product_img= $imageName;
        $data->product_status= $request->status;
        $data->save();
        Session::flash('msg','Data submit successfully');
        return redirect()->route('product.index');
    }

    public function show($product_id=null){
        $showData = Product::join('categories', 'products.category_id', '=', 'categories.category_id')
                            ->join('subcategories', 'products.subcategory_id', '=', 'subcategories.subcategory_id')
                            ->join('brands', 'products.brand_id', '=', 'brands.brand_id')
                            ->join('units', 'products.unit_id', '=', 'units.unit_id')
                            ->join('colors', 'products.color_id', '=', 'colors.color_id')
                            ->join('statuses', 'products.product_status', '=', 'statuses.id')->find($product_id);
        return view('backend/product/show', compact('showData'));
    }

    public function destroy($product_id=null){
        $destroyData = Product::find($product_id);
        $destroyData->delete();
        Session::flash('msg','Data delete successfully');
        return redirect()->route('product.index');
    }
}

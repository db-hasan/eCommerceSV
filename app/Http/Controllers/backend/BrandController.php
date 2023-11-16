<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Status;
use Session;

class BrandController extends Controller
{
    public function index() {
        $indexbrand = Brand::join('statuses', 'brands.brand_status', '=', 'statuses.id')->get();
        return view('backend/brand/index', compact('indexbrand'));
    }

    public function create(){
        return view('backend/brand/create');
    }
    public function store(Request $request){
        $rules = [
            'brand_name' => 'required | max:50',
        ];
        $v_msg=[
            'brand_name.required'=> 'Please enter Name',
        ];
        $this -> validate($request, $rules, $v_msg);

        $data= new Brand();
        $data->brand_name= $request->brand_name;
        $data->save();
        Session::flash('msg','Data submit successfully');
        return redirect()->route('brand.index');
    }

    public function edit($brand_id=null){
        $indexData['indexData'] = brand::find($brand_id);
        $indexData['indexStatus']= Status::all();      
        return view('backend/brand/edit', $indexData);
    }
    
    public function update(Request $request, $brand_id){
        $rules = [
            'brand_name' => 'required | max:50',
        ];
        $v_msg=[
            'brand_name.required'=> 'Please enter Name',
        ];
        $this -> validate($request, $rules, $v_msg);

        $data= Brand::find($brand_id);
        $data->brand_name= $request->brand_name;
        $data->brand_status= $request->status;
        $data->save();
        Session::flash('msg','Data submit successfully');
        return redirect()->route('brand.index');
    }

    public function show($brand_id=null){
        $showData = Brand::join('statuses', 'brands.brand_status', '=', 'statuses.id')->find($brand_id);
        return view('backend/brand/show', compact('showData'));
    }

    public function destroy($brand_id=null){
        $destroyData = Brand::find($brand_id);
        $destroyData->delete();
        Session::flash('msg','Data delete successfully');
        return redirect()->route('brand.index');
    }
}

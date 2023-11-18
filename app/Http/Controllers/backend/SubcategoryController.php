<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Subcategory;
use App\Models\Category;
use App\Models\Status;
use Session;

class SubcategoryController extends Controller
{
    public function index() {
        $indexsubcategory = DB::table('subcategories')
                                        ->join('statuses', 'subcategories.subcategory_status', '=', 'statuses.id')
                                        ->join('categories', 'subcategories.category_id', '=', 'categories.category_id')->get();
        return view('backend/subcategory/index', compact('indexsubcategory'));
    }

    public function create(){
        $indexData['indexcategory']= Category::all();
        return view('backend/subcategory/create', $indexData);
    }
    public function store(Request $request){
        $rules = [
            'category_name' => 'required | max:50',
            'subcategory_name' => 'required | max:50',
        ];
        $v_msg=[
            'category_name.required'=> 'Please enter Name',
            'subcategory_name.required'=> 'Please enter Name',
        ];
        $this -> validate($request, $rules, $v_msg);

        $data= new Subcategory();
        $data->category_id= $request->category_name;
        $data->subcategory_name= $request->subcategory_name;
        $data->save();
        Session::flash('msg','Data submit successfully');
        return redirect()->route('subcategory.index');
    }

    public function edit($subcategory_id=null){
        $indexData['indexData'] = Subcategory::find($subcategory_id);
        $indexData['indexcategory']= Category::all();     
        $indexData['indexStatus']= Status::all();     
        return view('backend/subcategory/edit', $indexData);
    }
    
    public function update(Request $request, $subcategory_id){
        $rules = [
            'category_name' => 'required | max:50',
            'subcategory_name' => 'required | max:50',
        ];
        $v_msg=[
            'category_name.required'=> 'Please enter Name',
            'subcategory_name.required'=> 'Please enter Name',
        ];
        $this -> validate($request, $rules, $v_msg);

        $data= Subcategory::find($subcategory_id);
        $data->category_id= $request->category_name;
        $data->subcategory_name= $request->subcategory_name;
        $data->subcategory_status= $request->status;
        $data->save();
        Session::flash('msg','Data submit successfully');
        return redirect()->route('subcategory.index');
    }

    public function show($subcategory_id=null){
        $showData = Subcategory::join('statuses', 'subcategories.subcategory_status', '=', 'statuses.id')
                                ->join('categories', 'subcategories.category_id', '=', 'categories.category_id')
                                ->find($subcategory_id);
        return view('backend/subcategory/show', compact('showData'));
    }

    public function destroy($subcategory_id=null){
        $destroyData = Subcategory::find($subcategory_id);
        $destroyData->delete();
        Session::flash('msg','Data delete successfully');
        return redirect()->route('subcategory.index');
    }
}

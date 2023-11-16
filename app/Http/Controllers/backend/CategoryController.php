<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Status;
use Session;

class CategoryController extends Controller
{
    public function index() {
        $indexcategory = Category::join('statuses', 'categories.category_status', '=', 'statuses.id')->get();
        return view('backend/category/index', compact('indexcategory'));
    }

    public function create(){
        return view('backend/category/create');
    }
    public function store(Request $request){
        $rules = [
            'category_name' => 'required | max:50',
        ];
        $v_msg=[
            'category_name.required'=> 'Please enter Name',
        ];
        $this -> validate($request, $rules, $v_msg);

        $data= new Category();
        $data->category_name= $request->category_name;
        $data->save();
        Session::flash('msg','Data submit successfully');
        return redirect()->route('category.index');
    }

    public function edit($category_id=null){
        $indexData['indexData'] = Category::find($category_id);
        $indexData['indexStatus']= Status::all();      
        return view('backend/category/edit', $indexData);
    }
    
    public function update(Request $request, $category_id){
        $rules = [
            'category_name' => 'required | max:50',
        ];
        $v_msg=[
            'category_name.required'=> 'Please enter Name',
        ];
        $this -> validate($request, $rules, $v_msg);

        $data= Category::find($category_id);
        $data->category_name= $request->category_name;
        $data->category_status= $request->status;
        $data->save();
        Session::flash('msg','Data submit successfully');
        return redirect()->route('category.index');
    }

    public function show($category_id=null){
        $showData = Category::join('statuses', 'categories.category_status', '=', 'statuses.id')->find($category_id);
        return view('backend/category/show', compact('showData'));
    }

    public function destroy($category_id=null){
        $destroyData = Category::find($category_id);
        $destroyData->delete();
        Session::flash('msg','Data delete successfully');
        return redirect()->route('category.index');
    }
}

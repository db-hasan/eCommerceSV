<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Subsubcategory;
use App\Models\Subcategory;
use App\Models\Status;
use Session;

class SubSubCategoryController extends Controller
{

    public function index() {
        $indexsubsubcategory =Subsubcategory::join('statuses', 'subsubcategories.subsubcategory_status', '=', 'statuses.id')
                                        ->join('subcategories', 'subsubcategories.subcategory_id', '=', 'subcategories.subcategory_id')
                                        ->get();
        return view('backend/subsubcategory/index', compact('indexsubsubcategory'));
    }

    public function create(){
        $indexData['indexsubcategory']= Subcategory::all();
        return view('backend/subsubcategory/create', $indexData);
    }
    public function store(Request $request){
        $rules = [
            'subcategory_name' => 'required | max:50',
            'subsubcategory_name' => 'required | max:50',
        ];
        $v_msg=[
            'subcategory_name.required'=> 'Please enter Name',
            'subsubcategory_name.required'=> 'Please enter Name',
        ];
        $this -> validate($request, $rules, $v_msg);

        $data= new Subsubcategory();
        $data->subcategory_id= $request->subcategory_name;
        $data->subsubcategory_name= $request->subsubcategory_name;
        $data->save();
        Session::flash('msg','Data submit successfully');
        return redirect()->route('subsubcategory.index');
    }

    public function edit($subsubcategory_id=null){
        $indexData['indexData'] = Subsubcategory::find($subsubcategory_id);
        $indexData['indexsubcategory']=Subcategory::all();     
        $indexData['indexStatus']= Status::all();      
        return view('backend/subsubcategory/edit', $indexData);
    }
    
    public function update(Request $request, $subsubcategory_id){
        $rules = [
            'subcategory_name' => 'required | max:50',
            'subsubcategory_name' => 'required | max:50',
        ];
        $v_msg=[
            'subcategory_name.required'=> 'Please enter Name',
            'subsubcategory_name.required'=> 'Please enter Name',
        ];
        $this -> validate($request, $rules, $v_msg);

        $data= Subsubcategory::find($subsubcategory_id);
        $data->subcategory_id= $request->subcategory_name;
        $data->subsubcategory_name= $request->subsubcategory_name;
        $data->subsubcategory_status= $request->status;
        $data->save();
        Session::flash('msg','Data submit successfully');
        return redirect()->route('subsubcategory.index');
    }

    public function show($subsubcategory_id=null){
        $showData = Subsubcategory::join('statuses', 'subsubcategories.subsubcategory_status', '=', 'statuses.id')
                                    ->join('subcategories', 'subsubcategories.subsubcategory_id', '=', 'subcategories.category_id')
                                    ->find($subsubcategory_id);
        return view('backend/subsubcategory/show', compact('showData'));
    }

    public function destroy($subsubcategory_id=null){
        $destroyData = Subsubcategory::find($subsubcategory_id);
        $destroyData->delete();
        Session::flash('msg','Data delete successfully');
        return redirect()->route('subsubcategory.index');
    }
}






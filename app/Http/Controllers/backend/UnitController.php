<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Unit;
use App\Models\Status;
use Session;

class UnitController extends Controller
{
    public function index() {
        $indexunit = Unit::join('statuses', 'units.unit_status', '=', 'statuses.id')->get();
        return view('backend/unit/index', compact('indexunit'));
    }

    public function create(){
        return view('backend/unit/create');
    }
    public function store(Request $request){
        $rules = [
            'unit_name' => 'required | max:50',
        ];
        $v_msg=[
            'unit_name.required'=> 'Please enter Name',
        ];
        $this -> validate($request, $rules, $v_msg);

        $data= new Unit();
        $data->unit_name= $request->unit_name;
        $data->save();
        Session::flash('msg','Data submit successfully');
        return redirect()->route('unit.index');
    }

    public function edit($unit_id=null){
        $indexData['indexData'] = Unit::find($unit_id);
        $indexData['indexStatus']= Status::all();      
        return view('backend/unit/edit', $indexData);
    }
    
    public function update(Request $request, $unit_id){
        $rules = [
            'unit_name' => 'required | max:50',
        ];
        $v_msg=[
            'unit_name.required'=> 'Please enter Name',
        ];
        $this -> validate($request, $rules, $v_msg);

        $data= Unit::find($unit_id);
        $data->unit_name= $request->unit_name;
        $data->unit_status= $request->status;
        $data->save();
        Session::flash('msg','Data submit successfully');
        return redirect()->route('unit.index');
    }

    public function show($unit_id=null){
        $showData = Unit::join('statuses', 'units.unit_status', '=', 'statuses.id')->find($unit_id);
        return view('backend/unit/show', compact('showData'));
    }

    public function destroy($unit_id=null){
        $destroyData = Unit::find($unit_id);
        $destroyData->delete();
        Session::flash('msg','Data delete successfully');
        return redirect()->route('unit.index');
    }
}

<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Purchaes;
use App\Models\Status;
use Session;

class PurchaesController extends Controller
{
    // public function index() {
    //     $indexpurchaes = Purchaes::all();
    //     return view('backend/purchaes/index', compact('indexpurchaes'));
    // }


    public function index() {
        $indexpurchaes = Purchaes::join('statuses', 'purchaes.purchaes_status', '=', 'statuses.id')->get();
        return view('backend/purchaes/index', compact('indexpurchaes'));
    }

    public function create(){
        return view('backend/purchaes/create');
    }
    // public function store(Request $request){
    //     $rules = [
    //         'purchaes_name' => 'required | max:50',
    //     ];
    //     $v_msg=[
    //         'purchaes_name.required'=> 'Please enter Name',
    //     ];
    //     $this -> validate($request, $rules, $v_msg);

    //     $data= new Purchaes();
    //     $data->purchaes_name= $request->purchaes_name;
    //     $data->save();
    //     Session::flash('msg','Data submit successfully');
    //     return redirect()->route('purchaes.index');
    // }

    // public function edit($purchaes_id=null){
    //     $indexData['indexData'] = Purchaes::find($purchaes_id);
    //     $indexData['indexStatus']= Status::all();      
    //     return view('backend/purchaes/edit', $indexData);
    // }
    
    // public function update(Request $request, $purchaes_id){
    //     $rules = [
    //         'purchaes_name' => 'required | max:50',
    //     ];
    //     $v_msg=[
    //         'purchaes_name.required'=> 'Please enter Name',
    //     ];
    //     $this -> validate($request, $rules, $v_msg);

    //     $data= Purchaes::find($purchaes_id);
    //     $data->purchaes_name= $request->purchaes_name;
    //     $data->purchaes_status= $request->status;
    //     $data->save();
    //     Session::flash('msg','Data submit successfully');
    //     return redirect()->route('purchaes.index');
    // }

    // public function show($purchaes_id=null){
    //     $showData = Purchaes::join('statuses', 'purchaess.purchaes_status', '=', 'statuses.id')->find($purchaes_id);
    //     return view('backend/purchaes/show', compact('showData'));
    // }

    // public function destroy($purchaes_id=null){
    //     $destroyData = Purchaes::find($purchaes_id);
    //     $destroyData->delete();
    //     Session::flash('msg','Data delete successfully');
    //     return redirect()->route('purchaes.index');
    // }
}

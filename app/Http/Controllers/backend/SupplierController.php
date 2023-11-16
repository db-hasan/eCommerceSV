<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Supplier;
use App\Models\Status;
use Session;

class SupplierController extends Controller
{
    public function index() {
        $indexsupplier = supplier::join('statuses', 'suppliers.supplier_status', '=', 'statuses.id')->get();
        return view('backend/supplier/index', compact('indexsupplier'));
    }

    public function create(){
        return view('backend/supplier/create');
    }
    public function store(Request $request){
         $rules = [
            'supplier_name' => 'required | max:50',
            'supplier_phone' => 'required | max:50',
            'supplier_email' => 'required | max:50',
            'supplier_address' => 'required | max:50',
        ];
        $v_msg=[
            'supplier_name.required'=> 'Please enter Name',
            'supplier_phone.required'=> 'Please enter Phone',
            'supplier_email.required'=> 'Please enter Email',
            'supplier_address.required'=> 'Please enter Address',
        ];
        $this -> validate($request, $rules, $v_msg);

        $data= new supplier();
        $data->supplier_name= $request->supplier_name;
        $data->supplier_phone= $request->supplier_phone;
        $data->supplier_email= $request->supplier_email;
        $data->supplier_address= $request->supplier_address;
        $data->save();
        Session::flash('msg','Data submit successfully');
        return redirect()->route('supplier.index');
    }

    public function edit($supplier_id=null){
        $indexData['indexData'] = supplier::find($supplier_id);
        $indexData['indexStatus']= Status::all();      
        return view('backend/supplier/edit', $indexData);
    }
    
    public function update(Request $request, $supplier_id){
        $rules = [
            'supplier_name' => 'required | max:50',
            'supplier_phone' => 'required | max:50',
            'supplier_email' => 'required | max:50',
            'supplier_address' => 'required | max:50',
        ];
        $v_msg=[
            'supplier_name.required'=> 'Please enter Name',
            'supplier_phone.required'=> 'Please enter Phone',
            'supplier_email.required'=> 'Please enter Email',
            'supplier_address.required'=> 'Please enter Address',
        ];
        $this -> validate($request, $rules, $v_msg);

        $data= supplier::find($supplier_id);
        $data->supplier_name= $request->supplier_name;
        $data->supplier_phone= $request->supplier_phone;
        $data->supplier_email= $request->supplier_email;
        $data->supplier_address= $request->supplier_address;
        $data->supplier_status= $request->status;
        $data->save();
        Session::flash('msg','Data submit successfully');
        return redirect()->route('supplier.index');
    }

    public function show($supplier_id=null){
        $showData = supplier::join('statuses', 'suppliers.supplier_status', '=', 'statuses.id')->find($supplier_id);
        return view('backend/supplier/show', compact('showData'));
    }

    public function destroy($supplier_id=null){
        $destroyData = supplier::find($supplier_id);
        $destroyData->delete();
        Session::flash('msg','Data delete successfully');
        return redirect()->route('supplier.index');
    }
}


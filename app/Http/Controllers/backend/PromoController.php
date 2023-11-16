<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Promo;
use App\Models\Status;
use Session;

class PromoController extends Controller
{
    public function index() {
        $indexpromo = Promo::join('statuses', 'promos.promo_status', '=', 'statuses.id')->get();
        return view('backend/promo/index', compact('indexpromo'));
    }

    public function create(){
        return view('backend/promo/create');
    }
    public function store(Request $request){
        $rules = [
            'promo_name' => 'required | max:50',
            'promo_code' => 'required | max:50',
            'promo_amount' => 'required | max:50',
        ];
        $v_msg=[
            'promo_name.required'=> 'Please enter Name',
            'promo_code.required'=> 'Please enter Code',
            'promo_amount.required'=> 'Please enter Amount',
        ];
        $this -> validate($request, $rules, $v_msg);

        $data= new Promo();
        $data->promo_name= $request->promo_name;
        $data->promo_code= $request->promo_code;
        $data->promo_amount= $request->promo_amount;
        $data->save();
        Session::flash('msg','Data submit successfully');
        return redirect()->route('promo.index');
    }

    public function edit($promo_id=null){
        $indexData['indexData'] = Promo::find($promo_id);
        $indexData['indexStatus']= Status::all();      
        return view('backend/promo/edit', $indexData);
    }
    
    public function update(Request $request, $promo_id){
        $rules = [
            'promo_name' => 'required | max:50',
            'promo_code' => 'required | max:50',
            'promo_amount' => 'required | max:50',
        ];
        $v_msg=[
            'promo_name.required'=> 'Please enter Name',
            'promo_code.required'=> 'Please enter Code',
            'promo_amount.required'=> 'Please enter Amount',
        ];
        $this -> validate($request, $rules, $v_msg);

        $data= Promo::find($promo_id);
        $data->promo_name= $request->promo_name;
        $data->promo_code= $request->promo_code;
        $data->promo_amount= $request->promo_amount;
        $data->promo_status= $request->status;
        $data->save();
        Session::flash('msg','Data submit successfully');
        return redirect()->route('promo.index');
    }

    public function show($promo_id=null){
        $showData = Promo::join('statuses', 'promos.promo_status', '=', 'statuses.id')->find($promo_id);
        return view('backend/promo/show', compact('showData'));
    }

    public function destroy($promo_id=null){
        $destroyData = Promo::find($promo_id);
        $destroyData->delete();
        Session::flash('msg','Data delete successfully');
        return redirect()->route('promo.index');
    }
}

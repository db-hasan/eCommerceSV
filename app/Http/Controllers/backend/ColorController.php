<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Color;
use App\Models\Status;
use Session;

class ColorController extends Controller
{
    // public function index() {
    //     $indexcolor = Color::all();
    //     return view('backend/color/index', compact('indexcolor'));
    // }
    public function index() {
        $indexcolor = Color::join('statuses', 'colors.color_status', '=', 'statuses.id')->get();
        return view('backend/color/index', compact('indexcolor'));
    }

    public function create(){
        return view('backend/color/create');
    }
    public function store(Request $request){
        $rules = [
            'color_name' => 'required | max:50',
        ];
        $v_msg=[
            'color_name.required'=> 'Please enter Name',
        ];
        $this -> validate($request, $rules, $v_msg);

        $data= new Color();
        $data->color_name= $request->color_name;
        $data->save();
        Session::flash('msg','Data submit successfully');
        return redirect()->route('color.index');
    }

    public function edit($color_id=null){
        $indexData['indexData'] = Color::find($color_id);
        $indexData['indexStatus']= Status::all();      
        return view('backend/color/edit', $indexData);
    }
    
    public function update(Request $request, $color_id){
        $rules = [
            'color_name' => 'required | max:50',
        ];
        $v_msg=[
            'color_name.required'=> 'Please enter Name',
        ];
        $this -> validate($request, $rules, $v_msg);

        $data= Color::find($color_id);
        $data->color_name= $request->color_name;
        $data->color_status= $request->status;
        $data->save();
        Session::flash('msg','Data submit successfully');
        return redirect()->route('color.index');
    }

    public function show($color_id=null){
        $showData = Color::join('statuses', 'colors.color_status', '=', 'statuses.id')->find($color_id);
        return view('backend/color/show', compact('showData'));
    }

    public function destroy($color_id=null){
        $destroyData = Color::find($color_id);
        $destroyData->delete();
        Session::flash('msg','Data delete successfully');
        return redirect()->route('color.index');
    }
}


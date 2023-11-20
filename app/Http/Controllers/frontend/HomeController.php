<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Subsubcategory;
use App\Models\Brand;
use App\Models\Color;
use App\Models\Status;
use Session;

class HomeController extends Controller
{

    public function home(){
		$indexData['indexcategory']=Product::groupBy('category_id')->paginate(6);
		$indexData['indexsubcategory']=Product::groupBy('subcategory_id')->paginate(6);
		$indexData['cateproduct']=Product::where('category_id',8)->paginate(6);
		return view('frontend/home/home', $indexData);
	}

    public function singelcategory($cata_id){
		$indexData['indexproduct']=Product::where('category_id',$cata_id)->get();
	    return view('frontend/product/product',$indexData);
	}

	// public function viewproduct(){
	// 	return view('frontend/home/home', $indexData);
	// }
}

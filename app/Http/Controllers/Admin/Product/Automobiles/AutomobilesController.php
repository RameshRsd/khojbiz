<?php

namespace App\Http\Controllers\Admin\Product\Automobiles;

use App\Alphabate;
use App\BuySell\BuySellCategory;
use App\District;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AutomobilesController extends Controller
{
    public function index(){
        $title ='Sell Automobiles';
        $districts = District::all();
        $alpha = Alphabate::all();
        $category = BuySellCategory::all();
        return view('admin.product.pages.automobiles.index',compact('title','districts','alpha','category'));
    }
}

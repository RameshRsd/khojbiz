<?php

namespace App\Http\Controllers;

use App\BuySell\Product;
use App\Category;
use App\Client\Client;
use App\User;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function top_company(){
        $clients =Client::where('company_nature','business')->where('client_type','diamond')->orderBy('id','DESC')->limit(4)->get();

        return \response()->view('ajax.homepage.top-companies',compact('clients'));

    }
    public function top_manufacture(){
        $clients =Client::where('company_nature','manufacture')->where('client_type','diamond')->orderBy('id','DESC')->limit(4)->get();
        return \response()->view('ajax.homepage.top-manufacture',compact('clients'));
    }
    public function top_products(){
        $clients =Product::where('product_type','diamond')->orderBy('id','DESC')->limit(4)->get();
        return \response()->view('ajax.homepage.top-products',compact('clients'));
    }
    public function popular_category(){
        $category =Category::withCount('client_cat')->orderBy('client_cat_count','DESC')->where('status','active')->limit(18)->get();
        return \response()->view('ajax.homepage.popular_category',compact('category'));
    }
    public function emailChecker(Request $request)
    {
        $data = User::where("email","LIKE","%{$request->input('query')}%")
            ->get();
        return response()->json($data);
    }

}

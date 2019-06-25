<?php

namespace App\Http\Controllers;

use App\Alphabate;
use App\Category;
use App\Client\Client;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function list_category($id){
        $title = 'Browse By Alphabates - Khojbiz.com';
        $category = Category::where('status','active')->orderBy('name')->get();
        $client =Client::all();
        return view('frontend.pages.category.index',compact('title','category','client'));
    }
}

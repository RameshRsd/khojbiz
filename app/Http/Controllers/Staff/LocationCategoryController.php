<?php

namespace App\Http\Controllers\Staff;

use App\Place\locationCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LocationCategoryController extends Controller
{
    public function index(){
        $title = 'Location Category - Staff Panel - Khojbiz.com';
        $categories = locationCategory::orderBy('id','DESC')->get();
        return view('staff.location.category.index',compact('title','categories'));
    }
    public function store(Request $request){
        $this->validate($request, [
            'name'=> 'required|unique:locations,name',
        ]);
        $category = new locationCategory();
        $category->name = $request->name;
        $category->slug = str_slug($request->name);
        $category->user_id = Auth::user()->id;
        $category->save();
        return redirect('staff/locations-categories')->with('success','Category Created Successfully!');
    }
    public function udpate(Request $request, $id){
        $category = locationCategory::findOrFail($id);
        $category->name = $request->name;
        $category->slug = str_slug($request->name);
        $category->save();
        return redirect('staff/locations-categories')->with('success','Category Update Successfully!');
    }
}

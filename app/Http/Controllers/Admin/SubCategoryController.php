<?php

namespace App\Http\Controllers\Admin;

use App\Alphabate;
use App\Category;
use App\SubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubCategoryController extends Controller
{
    public function index(){
        $title = 'Company Nature - Admin-Panel | khojbiz.com';
        $category = Category::orderBy('name','ASC')->get();
        $sub_category = SubCategory::orderBy('name','ASC')->get();
        $alpha = Alphabate::orderBy('name','ASC')->get();
        return view('admin.category.sub_index',compact('title','category','sub_category','alpha'));
    }
    public function store(Request $request){
        $this->validate($request, [
            'name'=> 'required|unique:sub_categories,name',
            'slug'=> 'unique:categories,slug',
        ]);

        $sub_cat = New SubCategory();
        $sub_cat->name = $request->name;
        $sub_cat->alphabate_id = $request->alphabate_id;
        $sub_cat->cat_id = $request->cat_id;
        $sub_cat->slug = str_slug($request->name);
        $sub_cat->save();
        return redirect()->back()->with('success','Sub Category Created Successfully !!');
    }
    public function edit($id){
        $title = 'Edit Category - Admin-Panel | khojbiz.com';
        $category = SubCategory::findOrFail($id);
        return view('admin.category.edit',compact('title','category'));
    }
    public function update(Request $request,$id){
        $this->validate($request, [
            'name'=> 'required|unique:sub_categories,name',
            'slug'=> 'unique:categories,slug',
        ]);
        $category = SubCategory::findOrFail($id);
        $category->name = $request->name;
        $category->alphabate_id = $request->alphabate_id;
        $category->slug = str_slug($request->name);
        $category->save();

        return redirect('admin/add-sub-category')->with('success','Sub Category Updated Successfully !!');

    }
}

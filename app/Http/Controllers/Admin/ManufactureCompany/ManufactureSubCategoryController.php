<?php

namespace App\Http\Controllers\Admin\ManufactureCompany;

use App\Alphabate;
use App\Menufacture\MenuCategory;
use App\Menufacture\MenuSubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ManufactureSubCategoryController extends Controller
{
    public function index(){
        $title = 'Company Nature - Admin-Panel | khojbiz.com';
        $category = MenuCategory::orderBy('name','ASC')->get();
        $sub_category = MenuSubCategory::orderBy('name','ASC')->get();
        $alpha = Alphabate::orderBy('name','ASC')->get();
        return view('admin.manufactures.category.sub_index',compact('title','category','sub_category','alpha'));
    }
    public function store(Request $request){
        $this->validate($request, [
            'name'=> 'required|unique:sub_categories,name',
            'slug'=> 'unique:categories,slug',
        ]);

        $sub_cat = New MenuSubCategory();
        $sub_cat->name = $request->name;
        $sub_cat->alphabet_id = $request->alphabet_id;
        $sub_cat->cat_id = $request->cat_id;
        $sub_cat->slug = str_slug($request->name);
        $sub_cat->save();
        return redirect()->back()->with('success','Sub Category Created Successfully !!');
    }
    public function edit($id){
        $title = 'Edit Category - Admin-Panel | khojbiz.com';
        $sub_category = MenuSubCategory::findOrFail($id);
        $category = MenuCategory::all();
        $alpha = Alphabate::all();
        return view('admin.manufactures.category.sub_edit',compact('title','category','alpha','sub_category'));
    }
    public function update(Request $request,$id){
        $this->validate($request, [
            'name'=> 'required|unique:sub_categories,name',
            'slug'=> 'unique:categories,slug',
        ]);
        $category = MenuSubCategory::findOrFail($id);
        $category->name = $request->name;
        $category->alphabet_id = $request->alphabet_id;
        $category->slug = str_slug($request->name);
        $category->save();

        return redirect('admin/add-sub-category-of-manufacturers')->with('success','Sub Category Updated Successfully !!');

    }
}

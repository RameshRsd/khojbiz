<?php

namespace App\Http\Controllers\Staff;

use App\Alphabate;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index(){
        $title = 'Company Category - Admin-Panel | khojbiz.com';
        $category = Category::orderBy('id','DESC')->get();
        $alpha = Alphabate::orderBy('name','ASC')->get();
        return view('staff.category.index',compact('title','category','alpha'));
    }
    public function store(Request $request){
        $this->validate($request, [
            'name'=> 'required|unique:categories,name',
            'slug'=> 'unique:categories,slug',
        ]);

        $cat = New Category();
        $cat->name = $request->name;
        $cat->alphabate_id = $request->alphabate_id;
        $cat->slug = str_slug($request->name);
        if ($request->hasFile('icon')){
            $filename = time().'.'.request()->file('icon')->getClientOriginalExtension();
            $filename = md5(microtime()) . '.' . $filename;
            request()->file('icon')->move('public/uploads/icon/',$filename);
            $cat->icon =$filename;
        }
        $cat->save();
        return redirect()->back()->with('success','Category Created Successfully !!');
    }
    public function edit($id){
        $title = 'Edit Category - Admin-Panel | khojbiz.com';
        $category = Category::findOrFail($id);
        return view('staff.category.edit',compact('title','category'));
    }
    public function update(Request $request,$id){
        $this->validate($request, [
            'name'=> 'required|unique:categories,name',
            'slug'=> 'unique:categories,slug',
        ]);
        $category = Category::findOrFail($id);
        $category->name = $request->name;
        $category->alphabate_id = $request->alphabate_id;
        $category->slug = str_slug($request->name);
        if ($request->hasFile('icon')){
            if (is_file(public_path('uploads/icon/').'/'.$category->icon) && file_exists(public_path('uploads/icon/').'/'.$category->icon)){
                unlink(public_path('uploads/icon/').'/'.$category->icon);
            }
            $filename = time().'.'.request()->file('icon')->getClientOriginalExtension();
            $filename = md5(microtime()) . '.' . $filename;
            request()->file('icon')->move('public/uploads/icon/',$filename);
            $category->icon =$filename;
        }
        $category->save();

        return redirect('staff/add-category')->with('success','Category Updated Successfully !!');

    }
}

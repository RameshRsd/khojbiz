<?php

namespace App\Http\Controllers\Admin;

use App\Alphabate;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index(){
        $title = 'Company Nature - Admin-Panel | khojbiz.com';
        $category = Category::orderBy('name','ASC')->where('status','active')->get();
        $alpha = Alphabate::orderBy('name','ASC')->get();
        return view('admin.category.index',compact('title','category','alpha'));
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
        $alphabates = Alphabate::orderBy('name')->get();
        return view('admin.category.edit',compact('title','category','alphabates'));
    }
    public function update(Request $request,$id){
        $this->validate($request, [
            'name'=> 'required|unique:categories,name,'.$id,
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

        return redirect('admin/add-category')->with('success','Category Updated Successfully !!');

    }
    public function trash($id){
        $category = Category::findOrFail($id);
        $category->status = 'trash';
        $category->save();
        return redirect('admin/add-category')->with('success','Company Nature Deleted Successfully !!');

    }

}

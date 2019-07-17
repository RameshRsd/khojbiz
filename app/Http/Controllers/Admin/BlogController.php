<?php

namespace App\Http\Controllers\Admin;

use App\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index(){
        $title = 'Blog Listing - Admin Panel - Khojbiz.com';
        $blogs = Blog::orderBy('id','DESC')->get();
        return view('admin.blog.index',compact('title','blogs'));
    }
    public function create(){
        $title = 'Add Blog - Admin Panel - Khojbiz.com';
        return view('admin.blog.create',compact('title'));
    }
    public function store(Request $request){
        $this->validate($request, [
            'title'=> 'required',
            'status'=> 'required',
            'image'=> 'required',
        ]);
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->details = $request->details;
        $blog->status = $request->status;
        $blog->user_id = Auth::user()->id;
        if ($request->hasFile('image')){
            $filename = time().'.'.request()->file('image')->getClientOriginalExtension();
            $filename = md5(microtime()) . '.' . $filename;
            request()->file('image')->move('public/uploads/blog/',$filename);
            $blog->image =$filename;
        }
        $blog->save();
        return redirect('admin/list-blog')->with('success','Blog Added Successfully !!');
    }
    public function edit($id){
        $title = 'Edit Blog - Admin Panel - Khojbiz.com';
        $blog = Blog::findOrFail($id);
        return view('admin.blog.edit',compact('title','blog'));
    }

    public function update(Request $request, $id){
        $blog = Blog::findOrFail($id);
        $blog->title = $request->title;
        $blog->details = $request->details;
        $blog->status = $request->status;
        $blog->user_id = Auth::user()->id;
        if ($request->hasFile('image')){
            if (is_file(public_path('uploads/blog/').'/'.$blog->image) && file_exists(public_path('uploads/blog/').'/'.$blog->image)){
                unlink(public_path('uploads/blog/').'/'.$blog->image);
            }
            $filename = time().'.'.request()->file('image')->getClientOriginalExtension();
            $filename = md5(microtime()) . '.' . $filename;
            request()->file('image')->move('public/uploads/blog/',$filename);
            $blog->image =$filename;
        }
        $blog->save();
        return redirect('admin/list-blog')->with('success','Blog Updated Successfully !!');
    }


}

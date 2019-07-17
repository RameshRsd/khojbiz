<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $title = 'Blogs - Khojbiz.com';
        $blogs = Blog::where('status','active')->orderBy('id','DESC')->get();
        return view('new.blog.index',compact('title','blogs'));
    }
    public function detail($id){
        $blog = Blog::findOrFail($id);
        $title = $blog->title .' - Blogs - Khojbiz.com';
        if (isset($blog->image)){
            $image = '/public/uploads/blog'.'/'.$blog->image;
        }
        return view('new.blog.view',compact('title','blog','image'));
    }
}

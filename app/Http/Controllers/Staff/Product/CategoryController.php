<?php

namespace App\Http\Controllers\Staff\Product;

use App\Alphabate;
use App\BuySell\ProductCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function index(){
        $title = 'Company Nature - Admin-Panel | khojbiz.com';
        $category = ProductCategory::orderBy('status','DESC')->get();
        $alpha = Alphabate::orderBy('name','ASC')->get();
        return view('staff.product.category.index',compact('title','category','alpha'));
    }
    public function store(Request $request){
        $this->validate($request, [
            'name'=> 'required',
        ]);

        $cat = New ProductCategory();
        $cat->name = $request->name;
        $cat->alphabet_id = $request->alphabet_id;
        $cat->status = 'draft';
        $cat->entry_by = Auth::user()->id;
        $cat->slug = str_slug($request->name);
        if ($request->hasFile('icon')){
            $filename = time().'.'.request()->file('icon')->getClientOriginalExtension();
            $filename = md5(microtime()) . '.' . $filename;
            request()->file('icon')->move('public/uploads/product/icon/',$filename);
            $cat->icon =$filename;
        }
        $cat->save();
        return redirect()->back()->with('success','Category Created Successfully !!');
    }
    public function update(Request $request,$id){
        $this->validate($request, [
            'name'=> 'required',
        ]);
        $category = ProductCategory::findOrFail($id);
        $category->name = $request->name;
        $category->alphabet_id = $request->alphabet_id;
        $category->slug = str_slug($request->name);
        if ($request->hasFile('icon')){
            if (is_file(public_path('uploads/product/icon/').'/'.$category->icon) && file_exists(public_path('uploads/buy_sell/icon/').'/'.$category->icon)){
                unlink(public_path('uploads/product/icon/').'/'.$category->icon);
            }
            $filename = time().'.'.request()->file('icon')->getClientOriginalExtension();
            $filename = md5(microtime()) . '.' . $filename;
            request()->file('icon')->move('public/uploads/product/icon/',$filename);
            $category->icon =$filename;
        }
        $category->save();

        return redirect('staff/add-product-category')->with('success','Category Updated Successfully !!');

    }
}

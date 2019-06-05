<?php

namespace App\Http\Controllers\Admin\ManufactureCompany;

use App\Alphabate;
use App\Client\Client;
use App\Menufacture\ManufactureWiseCategory;
use App\Menufacture\MenuCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ManufactureCategoryController extends Controller
{
    public function index(){
        $title = 'Company Nature - Admin-Panel | khojbiz.com';
        $category = MenuCategory::orderBy('name','ASC')->get();
        $alpha = Alphabate::orderBy('name','ASC')->get();
        return view('admin.manufactures.category.index',compact('title','category','alpha'));
    }
    public function store(Request $request){
        $this->validate($request, [
            'name'=> 'required|unique:categories,name',
            'slug'=> 'unique:categories,slug',
        ]);

        $cat = New MenuCategory();
        $cat->name = $request->name;
        $cat->alphabet_id = $request->alphabet_id;
        $cat->slug = str_slug($request->name);
        if ($request->hasFile('icon')){
            $filename = time().'.'.request()->file('icon')->getClientOriginalExtension();
            $filename = md5(microtime()) . '.' . $filename;
            request()->file('icon')->move('public/uploads/manufacture/icon/',$filename);
            $cat->icon =$filename;
        }
        $cat->save();
        return redirect()->back()->with('success','Manufacture Category Created Successfully !!');
    }
    public function edit($id){
        $title = 'Edit Category - Admin-Panel | khojbiz.com';
        $category = MenuCategory::findOrFail($id);
        $alpha = Alphabate::all();
        return view('admin.manufactures.category.edit',compact('title','category','alpha'));
    }
    public function update(Request $request,$id){
        $this->validate($request, [
            'name'=> 'required|unique:categories,name',
            'slug'=> 'unique:categories,slug',
        ]);
        $category = MenuCategory::findOrFail($id);
        $category->name = $request->name;
        $category->alphabet_id = $request->alphabet_id;
        $category->slug = str_slug($request->name);
        if ($request->hasFile('icon')){
            if (is_file(public_path('uploads/manufacture/icon/').'/'.$category->icon) && file_exists(public_path('uploads/manufacture/icon/').'/'.$category->icon)){
                unlink(public_path('uploads/manufacture/icon/').'/'.$category->icon);
            }
            $filename = time().'.'.request()->file('icon')->getClientOriginalExtension();
            $filename = md5(microtime()) . '.' . $filename;
            request()->file('icon')->move('public/uploads/manufacture/icon/',$filename);
            $category->icon =$filename;
        }
        $category->save();

        return redirect('admin/add-category-of-manufacturers')->with('success','Manufacturers Category Updated Successfully !!');

    }

    public function cat_wise_manufacture(){
        $title = 'Category Wise Client';
        $client = Client::where('company_nature','manufacture')->orderBy('id','DESC')->get();
        $categories = MenuCategory::all();
        return view('admin.manufactures.category.cat_wise_manufacture',compact('title','client','categories'));
    }
    public function cat_wise_manufacture_store(Request $request){
        $this->validate($request,[
            'client_id'=>'required',
            'cat_id'=>'required',
        ]);

        foreach(\request('cat_id') as $key => $value){
            if ((ManufactureWiseCategory::where('cat_id',$value)->where('client_id',$request->client_id)->count())==0){
                $menu_wise_cat = ManufactureWiseCategory::firstOrNew(['cat_id'=>$value,'client_id'=>$request->client_id]);
                $menu_wise_cat->save();
            }else{
                return redirect()->back()->with('error', 'Already Uses');
            }
        }
        return redirect()->back()->with('success', 'Record Saved Successfully');

    }
}

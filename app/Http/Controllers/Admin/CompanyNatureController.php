<?php

namespace App\Http\Controllers\Admin;

use App\CompanyNature;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CompanyNatureController extends Controller
{
    public function index(){
        $title = 'Company Nature - Admin-Panel | khojbiz.com';
        $company_natures = CompanyNature::orderBy('name','ASC')->get();
        return view('admin.company_nature.index',compact('title','company_natures'));
    }
    public function store(Request $request){
        $this->validate($request, [
            'name'=> 'required|unique:company_natures,name',
            'slug'=> 'unique:company_natures,slug',
        ]);

        $cat = New CompanyNature();
        $cat->name = $request->name;
        $cat->slug = str_slug($request->name);
        $cat->save();
        return redirect()->back()->with('success','Company Nature Created Successfully !!');
    }
    public function edit($id){
        $title = 'Edit Company Nature - Admin-Panel | khojbiz.com';
        $company_nature = CompanyNature::findOrFail($id);
        return view('admin.company_nature.edit',compact('title','company_nature'));
    }
    public function update(Request $request,$id){
        $this->validate($request, [
            'name'=> 'required|unique:company_natures,name',
            'slug'=> 'unique:company_natures,slug',
        ]);
        $category = CompanyNature::findOrFail($id);
        $category->name = $request->name;
        $category->slug = str_slug($request->name);
        $category->save();

        return redirect('admin/company-nature')->with('success','Company Nature Updated Successfully !!');

    }
}

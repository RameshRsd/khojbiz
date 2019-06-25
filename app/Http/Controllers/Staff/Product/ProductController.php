<?php

namespace App\Http\Controllers\Staff\Product;

use App\Alphabate;
use App\BuySell\Product;
use App\BuySell\ProductCategory;
use App\BuySell\ProductWiseSuppliers;
use App\District;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index(){
        $alpha = Alphabate::all();
        $category = ProductCategory::all();
        $districts = District::all();
        $products = Product::where('user_id',Auth::user()->id)->orderBy('id','ASC')->get();
        $title = 'Add Product';
        return view('staff.product.index',compact('title','alpha','category','districts','products'));
    }
    public function create(){
        $alpha = Alphabate::all();
        $category = ProductCategory::all();
        $districts = District::all();
        $title = 'Add Product';
        return view('staff.product.create',compact('title','alpha','category','districts'));
    }

    public function store(Request $request){
        $this->validate($request,[
            'product_name' => 'required',
        ]);

        $product = new Product();
        $product->product_name = $request->product_name;
        $product->alpha_id = $request->alpha_id;
        $product->product_type = $request->product_type;
        $product->email = $request->email;
        $product->contact_no = $request->contact_no;
        $product->contact_person = $request->contact_person;
        $product->website = $request->website;
        $product->address = $request->address;
        $product->user_id = Auth::user()->id;
        $product->product_details = $request->product_details;
        if ($request->hasFile('feature')){
            $filename = time().'.'.request()->file('feature')->getClientOriginalExtension();

            $filename = md5(microtime()) . '.' . $filename;

            request()->file('feature')->move('public/uploads/product/feature/',$filename);
            $product->feature =$filename;
        }
        $product->save();
        $product->slug = str_slug($request->product_name).'-'.$product->id;
        $product->save();

        foreach(\request('cat_id') as $key => $value){
            if ((ProductWiseSuppliers::where('cat_id',$value)->where('product_id',$product->id)->count())==0){
                $menu_wise_cat = ProductWiseSuppliers::firstOrNew(['cat_id'=>$value,'product_id'=>$product->id]);
                $menu_wise_cat->save();
            }else{
                return redirect()->back()->with('error', 'Already Uses');
            }
        }
        return redirect('admin/list-suppliers')->with('success','Suppliers Created Successfully !');

    }
    public function edit_product($id){
        $title = 'Product edit';
        $alpha = Alphabate::orderBy('name','ASC')->get();
        $category = ProductCategory::orderBy('name','ASC')->get();
        $products = Product::findOrFail($id);
        return view('admin.product.edit',compact('title','products','alpha','category'));
    }
    public function product_update(Request $request, $id){
        $this->validate($request,[
            'product_name'=>'required',
        ]);
        $title = 'Product edit';
        $product = Product::findOrFail($id);
        $product->product_name = $request->product_name;
        $product->alpha_id = $request->alpha_id;
        $product->product_type = $request->product_type;
        $product->email = $request->email;
        $product->contact_no = $request->contact_no;
        $product->contact_person = $request->contact_person;
        $product->website = $request->website;
        $product->address = $request->address;
        $product->product_details = $request->product_details;
        if ($request->hasFile('feature')){
            if (is_file(public_path('uploads/product/feature/').'/'.$product->feature) && file_exists(public_path('uploads/product/feature/').'/'.$product->feature)){
                unlink(public_path('uploads/product/feature/').'/'.$product->feature);
            }
            $filename = time().'.'.request()->file('feature')->getClientOriginalExtension();

            $filename = md5(microtime()) . '.' . $filename;

            request()->file('feature')->move('public/uploads/product/feature/',$filename);
            $product->feature =$filename;
        }
        $product->save();
        $product->slug = str_slug($request->product_name).'-'.$product->id;
        $product->save();

        return redirect('admin/list-suppliers')->with('success','Product updated Successfully',compact('title'));
    }
}

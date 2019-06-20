<?php

namespace App\Http\Controllers\Admin\Product;

use App\BuySell\Product;
use App\BuySell\ProductCategory;
use App\BuySell\ProductWiseSuppliers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductWiseSuppliersController extends Controller
{
    public function index(){
        $title = 'Category Wise Client';
        $products = Product::orderBy('id','DESC')->get();
        $categories = ProductCategory::all();
        return view('admin.product.category.product_wise_suppliers',compact('title','products','categories'));
    }
    public function store(Request $request){
        $this->validate($request,[
            'product_id'=>'required',
            'cat_id'=>'required',
        ]);

        foreach(\request('cat_id') as $key => $value){
            if ((ProductWiseSuppliers::where('cat_id',$value)->where('product_id',$request->product_id)->count())==0){
                $product_wise_suppliers = ProductWiseSuppliers::firstOrNew(['cat_id'=>$value,'product_id'=>$request->product_id]);
                $product_wise_suppliers->save();
            }
//            else{
//                return redirect()->back()->with('error', 'Already Uses');
//            }
        }
        return redirect()->back()->with('success', 'Record Saved Successfully');

    }
}

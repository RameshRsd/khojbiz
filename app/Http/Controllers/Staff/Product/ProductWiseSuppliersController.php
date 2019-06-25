<?php

namespace App\Http\Controllers\Staff\Product;

use App\BuySell\Product;
use App\BuySell\ProductCategory;
use App\BuySell\ProductWiseSuppliers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProductWiseSuppliersController extends Controller
{
    public function index(){
        $title = 'Category Wise Client';
        $products = Product::where('user_id',Auth::user()->id)->orderBy('id','DESC')->get();
        $categories = ProductCategory::all();
        return view('staff.product.category.product_wise_suppliers',compact('title','products','categories'));
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

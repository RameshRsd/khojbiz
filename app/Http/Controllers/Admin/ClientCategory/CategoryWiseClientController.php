<?php

namespace App\Http\Controllers\Admin\ClientCategory;

use App\Category;
use App\CategoryWiseClient;
use App\Client\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryWiseClientController extends Controller
{
    public function index(){
        $title = 'Category Wise Client';
        $client = Client::orderBy('id','DESC')->get();
        $categories = Category::all();
        return view('admin.category_wise_client.index',compact('title','client','categories'));
    }
    public function store(Request $request){
        $this->validate($request,[
            'client_id'=>'required',
            'cat_id'=>'required',
        ]);

        foreach(\request('cat_id') as $key => $value){
            if ((CategoryWiseClient::where('cat_id',$value)->where('client_id',$request->client_id)->count())==0){
                $student_grades = CategoryWiseClient::firstOrNew(['cat_id'=>$value,'client_id'=>$request->client_id]);
                $student_grades->save();
            }else{
                return redirect()->back()->with('error', 'Already Uses');
            }
        }
        return redirect()->back()->with('success', 'Record Saved Successfully');

    }
}

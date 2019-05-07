<?php

namespace App\Http\Controllers\Admin;

use App\Advertisement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdsController extends Controller
{
    public function index(){
        $title = 'Advertisment - Admin-Panel | khojbiz.com';
        $adverts = Advertisement::orderBy('id','DESC')->get();
        return view('admin.advert.index',compact('title','adverts'));
    }
    public function create(){
        $title = 'Create Advertisment - Admin-Panel | khojbiz.com';
        $adverts = Advertisement::orderBy('id','DESC')->get();
        return view('admin.advert.create',compact('title','adverts'));
    }
    public function store(Request $request){
        $this->validate($request, [
            'organization'=> 'required',
            'url'=> 'required',
            'type'=> 'required',
        ]);

        $advert = New Advertisement();
        $advert->organization = $request->organization;
        $advert->url = $request->url;
        $advert->start_date = $request->start_date;
        $advert->end_date = $request->end_date;
        $advert->status = 'active';
        $advert->type = $request->type;
        $advert->user_id = Auth::user()->id;
        if ($request->hasFile('image')){
            $filename = time().'.'.request()->file('image')->getClientOriginalExtension();

            $filename = md5(microtime()) . '.' . $filename;

            request()->file('image')->move('public/uploads/adverts/',$filename);
            $advert->image =$filename;
        }
        $advert->save();
        return redirect('admin/list-advets')->with('success','Ads Created Successfully !');
    }
    public function edit($id){
        $title = 'Edit Advertisment - Admin-Panel | khojbiz.com';
        $advert = Advertisement::findOrFail($id);
        return view('admin.advert.edit',compact('title','advert'));
    }
    public function update(Request $request,$id){
        $this->validate($request, [
            'organization'=> 'required',
            'url'=> 'required',
            'type'=> 'required',
        ]);

        $advert = Advertisement::findOrFail($id);
        $advert->organization = $request->organization;
        $advert->url = $request->url;
        $advert->start_date = $request->start_date;
        $advert->end_date = $request->end_date;
        $advert->type = $request->type;
        $advert->user_id = Auth::user()->id;
        if ($request->hasFile('image')){
            if (is_file(public_path('uploads/adverts/').'/'.$advert->image) && file_exists(public_path('uploads/adverts/').'/'.$advert->image)){
                unlink(public_path('uploads/adverts/').'/'.$advert->image);
            }

            $filename = time().'.'.request()->file('image')->getClientOriginalExtension();

            $filename = md5(microtime()) . '.' . $filename;

            request()->file('image')->move('public/uploads/adverts/',$filename);
            $advert->image =$filename;
        }
        $advert->save();
        return redirect('admin/list-advets')->with('success','Advert Update Successfully !');
    }
    public function delete($id){
        $advert = Advertisement::findOrFail($id);
        if (is_file(public_path('uploads/adverts/').'/'.$advert->image) && file_exists(public_path('uploads/adverts/').'/'.$advert->image)){
            unlink(public_path('uploads/adverts/').'/'.$advert->image);
        }
        $advert->delete();
        return redirect('admin/list-advets')->with('success','Advert Delete Successfully !');
    }
}

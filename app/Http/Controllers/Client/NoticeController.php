<?php

namespace App\Http\Controllers\Client;

use App\Client\Client;
use App\Client\ClientNotice;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class NoticeController extends Controller
{
    public function index(){
        $client = Client::where('user_id',Auth::user()->id)->first();
        $title = 'Notice Management -  Client Area - Khojbiz.com';
        $notices = ClientNotice::where('client_id',$client->id)->orderBy('id','DESC')->get();
        return view('new.client.notice.index',compact('title','notices'));
    }
    public function create(){
        $title = 'Add New Notice -  Client Area - Khojbiz.com';
        return view('new.client.notice.create',compact('title'));
    }
    public function store(Request $request){
        $client = Client::where('user_id',Auth::user()->id)->first();

        $this->validate($request,[
            'name'=>'required',
            'details'=>'required',
            'start_at'=>'required',
            'end_at'=>'required',
        ]);
        $notice = new ClientNotice();
        $notice->name = $request->name;
        $notice->start_at = $request->start_at;
        $notice->end_at = $request->end_at;
        $notice->details = $request->details;
        $notice->client_id = $client->id;
        $notice->status = $request->status;
        $notice->save();
        return redirect('client/notice/list-notice')->with('success','Notice Added Successfully !!');
    }
    public function edit($id){
        $client = Client::where('user_id',Auth::user()->id)->first();
        $title = 'Edit Notice -  Client Area - Khojbiz.com';
        $notice = ClientNotice::findOrFail($id);
        if ($notice->client_id == $client->id){
            return view('new.client.notice.edit',compact('title','notice'));
        }else{
            return redirect('client/notice/list-notice')->with('error','Permission Denined !!');
        }
    }
    public function update(Request $request,$id){
        $client = Client::where('user_id',Auth::user()->id)->first();
        $notice = ClientNotice::findOrFail($id);
        if ($notice->client_id == $client->id){
            $this->validate($request,[
                'name'=>'required',
                'details'=>'required',
                'start_at'=>'required',
                'end_at'=>'required',
            ]);
            $notice->name = $request->name;
            $notice->start_at = $request->start_at;
            $notice->end_at = $request->end_at;
            $notice->details = $request->details;
            $notice->status = $request->status;
            $notice->save();
            return redirect('client/notice/list-notice')->with('success','Notice Update Successfully !!');
        }else{
            return redirect('client/notice/list-notice')->with('error','Permission Denined !!');
        }
    }
    public function delete($id){
        $client = Client::where('user_id',Auth::user()->id)->first();
        $notice = ClientNotice::findOrFail($id);
        if ($notice->client_id == $client->id){
            $notice->delete();
            return redirect('client/notice/list-notice')->with('success','Notice Deleted Successfully !!');
        }else{
            return redirect('client/notice/list-notice')->with('error','Permission Denined !!');
        }
    }
}

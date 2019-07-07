<?php

namespace App\Http\Controllers\Client;

use App\Client\Client;
use App\ClientGallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class GalleryController extends Controller
{
    public function index(){
        $client = Client::where('user_id',Auth::user()->id)->first();
        $title = 'List Images - '.$client->company_name.' - Client Area - Khojbiz.com';
        $galleries = ClientGallery::where('client_id',$client->id)->orderBy('id','DESC')->get();
        return view('new.client.gallery.index',compact('title','client','galleries'));
    }
    public function create(){
        $client = Client::where('user_id',Auth::user()->id)->first();
        $title = 'New Images - '.$client->company_name.' - Client Area - Khojbiz.com';
        return view('new.client.gallery.create',compact('title','client'));
    }
    public function store(Request $request){
        $client = Client::where('user_id',Auth::user()->id)->first();
        $this->validate($request, [
            'name'=> 'required',
        ]);
        if ($request->hasFile('title')) {
            $files = $request->file('title');
            foreach($files as $file){
                $clientGallery = new ClientGallery();
                $filename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $FileGallery = str_random(5)."-".date('his')."-".str_random(3);
                $fileName= md5($FileGallery).".".$extension;
                $destinationPath = 'public/uploads/client-gallery'.'/';
                $file->move($destinationPath, $fileName);
                $clientGallery->client_id = $client->id;
//                $clientGallery->cat_id = $request->cat_id;
                $clientGallery->image = $fileName;
                $clientGallery->name = $request->name;
                $clientGallery->status = 'active';
                $clientGallery->save();
            }
        }
        return redirect('client/gallery-manage/list-images')->with('success','Images Saved Successfully !!');
    }
    public function edit($id){
        $client = Client::where('user_id',Auth::user()->id)->first();
        $title = 'Edit Image - '.$client->company_name.' - Client Area - Khojbiz.com';
        $gallery = ClientGallery::findOrFail($id);
        if ($gallery->client_id == $client->id){
            return view('new.client.gallery.edit',compact('title','client','gallery'));
        }else{
            return redirect('client/gallery-manage/list-images')->with('error','Invalid Access');
        }
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'name'=> 'required',
        ]);
        $client = Client::where('user_id',Auth::user()->id)->first();
        $gallery = ClientGallery::findOrFail($id);
        if ($gallery->client_id == $client->id){
            if ($request->hasFile('title')){
                if (is_file(public_path('uploads/client-gallery/').'/'.$gallery->image) && file_exists(public_path('uploads/client-gallery/').'/'.$gallery->image)){
                    unlink(public_path('uploads/client-gallery/').'/'.$gallery->image);
                }
                $filename = time().'.'.request()->file('title')->getClientOriginalExtension();

                $filename = md5(microtime()) . '.' . $filename;

                request()->file('title')->move('public/uploads/client-gallery/',$filename);
                $gallery->image =$filename;
            }

            $gallery->name = $request->name;
            $gallery->status = $request->status;
            $gallery->save();

            return redirect('client/gallery-manage/list-images')->with('success','Image Successfully Updated !!');
        }else{
            return redirect('client/gallery-manage/list-images')->with('error','Invalid Access');
        }
    }
    public function delete($id){
        $client = Client::where('user_id',Auth::user()->id)->first();
        $gallery = ClientGallery::findOrFail($id);
        if ($gallery->client_id == $client->id){
                if (is_file(public_path('uploads/client-gallery/').'/'.$gallery->image) && file_exists(public_path('uploads/client-gallery/').'/'.$gallery->image)){
                    unlink(public_path('uploads/client-gallery/').'/'.$gallery->image);
                }
            $gallery->delete();
            return redirect('client/gallery-manage/list-images')->with('success','Image Successfully Deleted !!');
        }else{
            return redirect('client/gallery-manage/list-images')->with('error','Invalid Access');
        }
    }

}

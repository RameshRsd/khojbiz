<?php

namespace App\Http\Controllers\Place;

use App\Alphabate;
use App\Place\location;
use App\Place\locationCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LocationController extends Controller
{
    public function index(Request $request){
        $title = 'Find Popular Places - Khojbiz.com';
        $location_categories = locationCategory::orderBy('name')->get();
        $alpho_shorts = Alphabate::orderBy('name')->get();
        $place = location::where('status','1')->orderBy('id','DESC');

        if ($request->place_name){
            $place->where('name','like','%'.$request->place_name.'%');
        }
        if ($request->short_by){
            $alpha = Alphabate::where('name',$request->short_by)->firstOrFail();
            $place->where('alpha_id',$alpha->id);
        }
        if ($request->place_category){
            $category = locationCategory::where('slug',$request->place_category)->firstOrFail();
            $place->where('cat_id',$category->id);
        }
        if ($request->place_location){
            $place->where('address',$request->place_location);
        }

        if ($request->show){
            $places = $place->paginate($request->show);
        }else{
            $places = $place->paginate(10);
        }
        return view('frontend.places.index',compact('title','places','location_categories','alpho_shorts'));
    }
}

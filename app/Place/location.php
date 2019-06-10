<?php

namespace App\Place;

use App\District;
use Illuminate\Database\Eloquent\Model;

class location extends Model
{
    public function district(){
        return $this->belongsTo(District::class,'district_id');
    }
    public function category(){
        return $this->belongsTo(locationCategory::class,'cat_id');
    }
}

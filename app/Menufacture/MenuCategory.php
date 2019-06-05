<?php

namespace App\Menufacture;

use App\Alphabate;
use Illuminate\Database\Eloquent\Model;

class MenuCategory extends Model
{
    public function alpha(){
        return $this->belongsTo(Alphabate::class,'alphabet_id');
    }
    public function sub_category(){
        return $this->hasMany(MenuSubCategory::class,'cat_id');
    }
}

<?php

namespace App\Menufacture;

use App\Alphabate;
use Illuminate\Database\Eloquent\Model;

class MenuSubCategory extends Model
{
    public function category(){
        return $this->belongsTo(MenuCategory::class,'cat_id');
    }
    public function alpha(){
        return $this->belongsTo(Alphabate::class,'alphabet_id');
    }

}

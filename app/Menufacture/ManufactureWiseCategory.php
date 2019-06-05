<?php

namespace App\Menufacture;

use Illuminate\Database\Eloquent\Model;

class ManufactureWiseCategory extends Model
{
    protected $fillable=['client_id','cat_id'];

    public function category(){
        return $this->belongsTo(MenuCategory::class,'cat_id');
    }
}

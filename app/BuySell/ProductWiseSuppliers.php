<?php

namespace App\BuySell;

use Illuminate\Database\Eloquent\Model;

class ProductWiseSuppliers extends Model
{
    protected $fillable=['product_id','cat_id'];

    public function category(){
        return $this->belongsTo(ProductCategory::class,'cat_id');
    }
}

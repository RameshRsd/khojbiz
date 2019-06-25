<?php

namespace App\BuySell;

use App\Alphabate;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{

    public function alpha(){
        return $this->belongsTo(Alphabate::class,'alphabet_id');
    }
    public function products(){
        return $this->belongsToMany(Product::class,'product_wise_suppliers','cat_id','product_id');
    }
    public function getProductIds(){
        {
            return $this->products()->allRelatedIds();
        }
    }

}

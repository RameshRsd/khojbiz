<?php

namespace App\BuySell;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=['product_id','cat_id'];

    public function client_category(){
        return $this->hasMany(ProductWiseSuppliers::class,'product_id');
    }

    public function suppliers_product(){
        return $this->hasMany(ProductWiseSuppliers::class,'product_id');
    }
    public function suppliers_product_limit(){
        return $this->hasMany(ProductWiseSuppliers::class,'product_id')->limit(9);
    }
    public function top_product(){
        return $this->hasMany(ProductWiseSuppliers::class,'product_id')->limit(3);
    }
    public function staff_select_product(){
        return $this->hasMany(ProductWiseSuppliers::class,'product_id');
    }
}

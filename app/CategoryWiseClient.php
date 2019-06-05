<?php

namespace App;

use App\Client\Client;
use Illuminate\Database\Eloquent\Model;

class CategoryWiseClient extends Model
{
    protected $fillable=['client_id','cat_id'];

    public function category(){
        return $this->belongsTo(Category::class,'cat_id');
    }

}

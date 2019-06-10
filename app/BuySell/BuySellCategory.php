<?php

namespace App\BuySell;

use App\Alphabate;
use Illuminate\Database\Eloquent\Model;

class BuySellCategory extends Model
{
    public function alpha(){
        return $this->belongsTo(Alphabate::class,'alphabet_id');
    }
}

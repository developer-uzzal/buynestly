<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    
    function product(){
        return $this->belongsTo(Product::class);
    }
}

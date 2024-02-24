<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    public function productDetails(){
       return  $this->hasOne(Product::class,'id','product_id');
    }
}

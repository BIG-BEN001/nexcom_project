<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TecshopWishlist extends Model
{
    protected $table = "tecshop_wishlists";

    public function user(){
    return $this->belongsTo(Tecshop_users::class);
    }

    public function product(){
    return $this->belongsTo(Product::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TecshopProducts extends Model
{
   protected $fillable = [
        'product', 'price','image','qty','description'
    ];

    public function orders(){

        return $this->belongsTo(order::class);
    }

    // public function user(){

    //     return $this->belongsTo(Tecshop_users::class);
    // }


    public function wishlist(){
        return $this->hasMany(TecshopWishlist::class);
     }
}

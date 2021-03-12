<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title', 'description','description2','description3'
    ];

     public function wishlist(){
        return $this->hasMany(TecshopWishlist::class);
     }
}

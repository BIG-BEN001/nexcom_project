<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Tecshop_users extends Authenticatable
{
    protected $guard = 'tecshop_users';
    protected $fillable = [
        'first_name','middle_name','last_name', 'email','phone_no', 'address','password'
    ];

    public function orders(){

        return $this->hasMany(Order::class);
    }

    // public function products(){
    //     return $this->hasMany(TecshopProducts::class);
    // }

    public function wishlist(){
        return $this->hasMany(TecshopWishlist::class);
     }
}

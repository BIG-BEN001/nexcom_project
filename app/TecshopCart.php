<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TecshopCart extends Model
{
    protected $fillable = [
        'userId','product', 'price','image','qty'
    ];
}

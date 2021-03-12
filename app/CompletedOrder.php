<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompletedOrder extends Model
{
    protected $table = 'completed_orders';
    protected $fillable = [
        'product', 'price','image','status'
    ];
}

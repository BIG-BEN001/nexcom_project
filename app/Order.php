<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    // protected $table = 'orders';

    protected $fillable = [
        'order_number', 'user_id', 'status', 'total', 'item_count', 'payment_status',
        'first_name', 'last_name', 'street_address','cart', 'region', 'phone_number'
    ];

    public function products(){
        return $this->hasMany(TecshopProducts::class);
    }

    public function user()
    {
        return $this->belongsTo(Tecshop_users::class, 'tecshop_users_id');
    }

    // public function items()
    // {
    //     return $this->hasMany(OrderItem::class);
    // }
}

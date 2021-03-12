<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $table = 'ordered_items';

    protected $fillable = [
        'order_id', 'product_id', 'quantity', 'price'
    ];

    public function product()
    {
        return $this->belongsTo(TecshopProducts::class);
    }
}

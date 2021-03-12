<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemsOrdered extends Model
{
    protected $table = 'items_ordered';

    protected $fillable = [
        'order_id', 'tecshop_products_id','product', 'quantity', 'price'
    ];

    public function product()
    {
        return $this->hasMany(TecshopProducts::class);
    }
}

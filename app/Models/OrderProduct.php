<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class OrderProduct extends Model
{
    public $table = 'order_products';

    public $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'sum_price',
    ];
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'qty',
        'product_id',
        "customer_id"
    ];
}

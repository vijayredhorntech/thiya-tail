<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartItems extends Model
{
    protected $fillable = [
        'cart_id',
        'product_id',
        'variation_id',
        'quantity',
        'amount',
    ];

    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }
}

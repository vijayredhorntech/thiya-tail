<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Order extends Model
{
    protected $fillable = [
        'order_id',
        'uuid',
        'amount',
        'address',
        'phone',
        'coupon_id',
        'coupon_discount',
        'user_id',
    ];

    protected $casts = [
        'uuid' => 'string',
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($order) {
            $order->order_id = 'THIYA-'.now()->format('ymd').'-'.rand(100000, 999999);
            $order->uuid = (string)Str::uuid();
        });
    }

    public function items()
    {
        return $this->hasMany(OrderItems::class);
    }
    public function payment()
    {
        return $this->hasMany(Payment::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductReview extends Model
{
    protected $fillable = [
        'product_id',
        'user_id',
        'review',
        'rating',
        'images',
        'active',
    ];

    protected $casts = [
        'images' => 'array',
    ];
    protected static function booted()
    {
        static::creating(function ($review) {
            $review->user_id = auth()->id();
        });
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    // user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

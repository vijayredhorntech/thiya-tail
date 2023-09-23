<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class ProductVariation extends Model
{
    use SoftDeletes, HasSlug;

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    protected $fillable = [
        'name',
        'price',
        'discount_type',
        'discount_amount',
        'product_id',
        'discount',
        'status'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function media()
    {
        return $this->hasMany(ProductMedia::class,'variation_id');
    }

    public function getDiscountedPriceAttribute()
    {
        if($this->discount && $this->discount_type === 'percentage'){
            return $this->price - ($this->price * $this->discount_amount / 100);
        }
        if($this->discount && $this->discount_type === 'flat'){
            return $this->price - $this->discount_amount;
        }
        return $this->price;
    }
}

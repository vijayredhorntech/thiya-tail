<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'user_id',
        'first_line',
        'second_line',
        'city',
        'state',
        'postal_code',
        'phone',
        'default',
    ];

    protected static function booted()
    {
        static::created(function ($address) {
            if($address->default) {
                auth()->user()->addresses()->where('id', '!=', $address->id)->update([
                    'default' => false,
                ]);
            }
        });
    }

    // complete address
    public function getCompleteAddressAttribute()
    {
        return "{$this->first_line}, {$this->second_line}, {$this->city}, {$this->state}, {$this->postal_code}";
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HomeSlider extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'image',
        'textOverlay',
        'text',
        'button_text',
        'button_link',
        'button',
        'status',
    ];
}

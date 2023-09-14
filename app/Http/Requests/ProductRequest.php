<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'featured' => ['required'],
            'active' => ['required'],
            'description' => ['required'],
            'mobile_description' => ['required'],
            'summary' => ['required'],
            'summary_image' => ['required'],
            'tagged_products' => ['json'],
        ];
    }
}

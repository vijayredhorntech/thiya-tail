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
            'status' => ['required'],
            'description' => ['required'],
            'mobile_description' => ['required'],
            'summary' => ['required'],
            'tagged_products' => ['nullable'],
            'summary_image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:1024'],
            'images.*' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:1024'],
        ];
    }
}

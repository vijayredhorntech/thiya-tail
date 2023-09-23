<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductVariationRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'price' => ['required'],
            'status' => ['required', 'boolean'],
            'discount' => ['required', 'boolean'],
            'discount_type' => ['nullable','in:percentage,flat','required_if:discount,1'],
            'discount_amount' => ['nullable', 'integer','required_if:discount,1'],
            'images.*' => ['nullable', 'image', 'mimes:jpg,jpeg,png,gif,svg', 'max:2048'],
        ];
    }
}

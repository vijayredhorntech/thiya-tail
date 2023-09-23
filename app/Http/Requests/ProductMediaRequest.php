<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductMediaRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'product_id' => ['required','exists:products,id'],
            'variation_id' => ['nullable'],
            'name' => ['required'],
            'type' => ['required'],
            'location' => ['required'],
        ];
    }
}

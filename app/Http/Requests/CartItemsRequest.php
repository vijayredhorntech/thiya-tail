<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CartItemsRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'cart_id' => ['required', 'integer'],
            'product_id' => ['required', 'integer'],
            'variation_id' => ['required', 'integer'],
            'quantity' => ['required', 'integer'],
            'amount' => ['required', 'integer'],
        ];
    }
}

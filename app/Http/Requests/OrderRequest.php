<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'order_id' => ['required'],
            'uuid' => ['required'],
            'amount' => ['required', 'integer'],
            'address' => ['required'],
            'phone' => ['required'],
            'user_id' => ['required', 'integer'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}

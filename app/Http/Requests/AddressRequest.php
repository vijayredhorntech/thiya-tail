<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddressRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'first_line' => ['required'],
            'second_line' => ['nullable'],
            'city' => ['required'],
            'state' => ['required'],
            'postal_code' => ['required'],
            'phone' => ['required'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}

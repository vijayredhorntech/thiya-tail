<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductReviewRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'review' => ['nullable'],
            'rating' => ['required', 'integer', 'min:1', 'max:5'],
            'images' => ['nullable'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}

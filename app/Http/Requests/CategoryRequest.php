<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'image' => ['required', 'mime_types:image/jpeg,image/png,image/jpg,image/svg+xml', 'max:1024'],
            'description' => ['nullable'],
        ];
    }
}

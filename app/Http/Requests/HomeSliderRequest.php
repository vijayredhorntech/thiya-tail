<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HomeSliderRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'image' => ['required'],
            'text_overlay' => ['required', 'boolean'],
            'text' => ['required_if:text_overlay,1'],
            'button' => ['required', 'boolean'],
            'button_text' => ['required_if:button,1'],
            'button_link' => ['required_if:button,1'],
            'status' => ['required'],
        ];
    }
    public function messages()
    {
        return [
            'image.required' => 'The image field is required.',
            'text_overlay.required' => 'The text overlay field is required.',
            'text.required_if' => 'The text field is required when text overlay is enabled.',
            'button_text.required_if' => 'The button text field is required when text overlay is enabled.',
            'button_link.required_if' => 'The button link field is required when text overlay is enabled.',
            'button.required' => 'The button field is required.',
            'status.required' => 'The status field is required.',
        ];
    }
}

<?php

namespace App\Http\Requests\Image;

use Illuminate\Foundation\Http\FormRequest;

class createImageRequest extends FormRequest
{
    
    public function authorize(): bool
    {
        return true;
    }

    
    public function rules(): array
    {
        return [
            'desription' => 'required|min:1|max:255',
            'image_path' => 'required|image'
        ];
    }
}

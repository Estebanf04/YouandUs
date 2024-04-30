<?php

namespace App\Http\Requests\Image;

use Illuminate\Foundation\Http\FormRequest;

class updateImageRequest extends FormRequest
{
    
    public function authorize(): bool
    {
        return true;
    }

    
    public function rules(): array
    {
        return [
            'desription' => 'required|min:1|max:255'
        ];
    }
}

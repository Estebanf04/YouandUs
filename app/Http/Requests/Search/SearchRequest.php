<?php

namespace App\Http\Requests\Search;

use Illuminate\Foundation\Http\FormRequest;

class SearchRequest extends FormRequest
{
 
    public function authorize(): bool
    {
        return true;
    }

   
    public function rules(): array
    {
        return [
            'busqueda' => 'required|min:1|max:40'
        ];
    }
}

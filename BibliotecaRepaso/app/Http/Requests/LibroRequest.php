<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LibroRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'isbn' => 'required|digits:13',
            'titulo' => 'required|string|max:150',
            'autor' => 'required|string',
            'paginas' => 'required|integer|min:1',
            'año' => 'required|integer|min:1000|max:' . date('Y'),
            'editorial' => 'required|string',
            'email_editorial' => 'required|email',
        ];
    }
}

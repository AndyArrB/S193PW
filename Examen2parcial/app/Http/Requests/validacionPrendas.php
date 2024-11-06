<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validacionPrendas extends FormRequest
{
   
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        
        return [
            'prenda'=> 'required',
            'color'=> 'required',
            'cantidad'=> 'required |numeric'
        ];

    }
}


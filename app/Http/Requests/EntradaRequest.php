<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EntradaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'titulo' => 'required|string|min:5|max:50',
            'tag' => 'required|string|min:3|max:50',
            'contenido' => 'required|string|min:5|max:255'
        ];
    }

    public function messages(){
        return [
            'titulo.required' => 'El titulo es obligatorio',
            'titulo.string' => 'El titulo debe ser una cadena de texto',
            'titulo.min' => 'El titulo debe tener mas de 3 letras',
            'titulo.max' => 'El titulo tiene un limite de 50 letras',

            'tag.required' => 'El tag es obligatorio',
            'tag.string' => 'El tag debe ser una cadena de texto',
            'tag.min' => 'El tag debe tener mas de 3 letras',
            'tag.max' => 'El tag no debe pasar de 50 letras',

            'contenido.required' => 'El contenido es obligatorio',
            'contenido.string' => 'El contenido debe ser una cadena de texto',
            'contenido.min' => 'El contenido debe tener mas de 3 letras',
            'contenido.max' => 'El contenido no debe pasar de 255 letras'
        ];
    }
}

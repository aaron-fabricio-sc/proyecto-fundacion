<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNotas extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

            'gestion' => 'required',
            'semestre' => 'required',
            'practica_1' => 'required|integer|max:100',
            'practica_2' => 'required|integer|max:100',
            'practica_3' => 'required|integer|max:100',

        ];
    }
    public function messages()
    {
        return
            [

                'semestre.unique' => 'El estudiante ya esta registrado en este semestre'
            ];
    }
}

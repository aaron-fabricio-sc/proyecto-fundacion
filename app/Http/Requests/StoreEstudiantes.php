<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEstudiantes extends FormRequest
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
            //
            'user_id' => "required|unique:estudiantes",
            'curso_id' => "required",
            'gestion' => "required",
            'semestre' => "required"
        ];
    }
    public function messages()
    {
        return
            [
                'user_id.unique' => "El usuario ya está en uso."
            ];
    }
}

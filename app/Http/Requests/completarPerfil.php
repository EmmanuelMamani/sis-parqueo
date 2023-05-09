<?php

namespace App\Http\Requests;

use App\Rules\FechaNacimiento;
use Illuminate\Foundation\Http\FormRequest;

class completarPerfil extends FormRequest
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
            'telefono'=>'bail|required|integer|digits_between:7,8|unique:perfils',
            'descripcion'=>'bail|required|string|min:3|max:150',
            'direccion'=>'bail|required|regex:/^[a-zA-Z\s áéíóúÁÉÍÓÚñÑ . _ #]+$/u|min:5|max:255',
            'nacimiento'=>['bail','required','date',new FechaNacimiento],
            'licencia'=>'bail|required|string|min:3|max:50',
            'ocupacion'=>'bail|required|string|min:3|max:150',
            'marca'=>'bail|required|string|min:3|max:50',
            'modelo'=>'bail|required|string|min:3|max:150',
            'año'=>'bail|required|integer|digits:4',
            'placa'=>'bail|required|string|min:3|max:10',
        ];
    }
}

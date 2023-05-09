<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class entradaVehiculoRequest extends FormRequest
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
            'placa'=>'bail|required|string|min:3|max:10',
            'entrada'=>'bail|required' ,
            'entradaH'=>'bail|required',
            'salidaH'=>'bail|required',
        ];
    }
}

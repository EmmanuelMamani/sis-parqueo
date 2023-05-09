<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class parqueoRequest extends FormRequest
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
            'parqueo'=>'bail|required|integer|unique:parqueos,nro_parqueo',
            'horizontal'=>'bail|required|integer',
            'vertical'=>'bail|required|integer',
            'precio'=>'bail|required|numeric',
        ];
    }
}

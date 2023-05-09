<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class pagarRequest extends FormRequest
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
            'name'=>'bail|required|regex:/^[a-zA-Z\s áéíóúÁÉÍÓÚñÑ]+$/u|min:5|max:50',
            'motivo'=>'bail|required|regex:/^[a-zA-Z\s áéíóúÁÉÍÓÚñÑ]+$/u|min:5|max:80',
            'ci'=>'bail|required|integer|digits_between:5,9|exists:perfils,user_ci'
        ];
    }
}

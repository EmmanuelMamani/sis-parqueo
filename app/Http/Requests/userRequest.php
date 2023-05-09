<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class userRequest extends FormRequest
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
            'name'=>'bail|required|regex:/^[a-zA-Z\s áéíóúÁÉÍÓÚñÑ ]+$/u|min:5|max:50',
            'last_name'=>'bail|required|regex:/^[a-zA-Z\s áéíóúÁÉÍÓÚñÑ ._]+$/u|min:5|max:50',
            'email'=>'bail|required|email|regex:/^[a-zA-Z\s 0-9 @ . _]+$/|unique:users,email',
            'ci'=>'bail|required|integer|digits_between:5,9|unique:users,ci',
            'password'=>['bail','required',Password::min(8)->letters()->mixedCase()->numbers()->symbols()],
        ];
    }
}

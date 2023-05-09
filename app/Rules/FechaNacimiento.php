<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class FechaNacimiento implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $añoAct=date("Y");
      
        $fechaNac= strtotime($value);
        $añoNac=date("Y",$fechaNac);
      
        $bool=false;
        if($añoAct-$añoNac>=18){
            $bool=true;
        }
        return $bool;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Debe ser mayor de 18 años';
    }
}

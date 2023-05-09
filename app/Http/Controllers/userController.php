<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class userController extends Controller
{
    //
    public function autentificacion(Request $request){
        $credentials=request()->only('email','password');
        if(Auth::attempt($credentials)){
            request()->session()->regenerate();
                return redirect('/menu');
        }else{
            return "incorrecto";
        }

    }
    public function logout(){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }
    public function ver_completar_perfil(){

    }
    public function ver_asignar_rol(){

    }
    public function registrar(){

    }

    public function completar_perfil(){

    }
    public function asignar_rol(){

    }
}

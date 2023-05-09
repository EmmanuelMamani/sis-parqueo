<?php

namespace App\Http\Controllers;

use App\Http\Requests\userRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    //
    public function autentificacion(Request $request){
        $credentials=request()->only('email','password');
        if(Auth::attempt($credentials)){
            request()->session()->regenerate();
                return redirect()->intended('/menu');
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

    public function registrar(userRequest $request){
        $user=new User();
        $user->name=$request->name;
        $user->last_name=$request->last_name;
        $user->email=$request->email;
        $user->ci=$request->ci;
        $user->password=Hash::make();
        $user->save();
       // return redirect(route());
    }

}

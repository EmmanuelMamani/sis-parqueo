<?php

namespace App\Http\Controllers;

use App\Http\Requests\completarPerfil;
use App\Http\Requests\userRequest;
use App\Models\perfil;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\rol;
use App\Models\vehiculo;

class userController extends Controller
{
    //
    public function menu(){
         return view('menu');
    }
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
    public function ver_registrar_usuario(){
        $roles=rol::all();
        return view('registro_usuario',['roles'=>$roles]);
    }
    public function ver_completar_perfil(){
        return view('completar_perfil');
    }
    public function ver_asignar_rol(){
        $usuarios=user::all();
        $roles=rol::all();
        return view('asignacion_rol',['usuarios'=>$usuarios,'roles'=>$roles]);
    }
    public function completar_perfil(completarPerfil $request){
        $perfil=new perfil();
        $perfil->user_ci=Auth::user()->ci;
        $perfil->telefono=$request->telefono;
        $perfil->descripcion=$request->descripcion;
        $perfil->direccion=$request->direccion;
        $perfil->fecha_nac=$request->nacimiento;
        $perfil->licencia=$request->licencia;
        $perfil->ocupacion=$request->ocupacion;
        $perfil->save();

        $vehiculo=new vehiculo();
        $vehiculo->marca=$request->marca;
        $vehiculo->modelo=$request->modelo;
        $vehiculo->año=$request->año;
        $vehiculo->placa=$request->placa;
        $vehiculo->tipo_vehiculo=$request->tipo_vehiculo;
        $vehiculo->soat=$request->soat;
        $vehiculo->perfil_id=$perfil->id;


        return redirect('/menu');
    }
    public function asignar_rol(Request $request){
        
        $usuario=user::find($request->usuario);
        $usuario->rol_id=$request->rol;
        $usuario->save();
        return redirect('/menu');
    }

    public function registrar(userRequest $request){
        $user=new User();
        $user->name=$request->name;
        $user->last_name=$request->last_name;
        $user->email=$request->email;
        $user->ci=$request->ci;
        $user->password=bcrypt($request->password);
        $user->rol_id=$request->rol;
        $user->save();
       return redirect('/menu');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\asignacion_horario;
use App\Models\User;
class guardiaController extends Controller
{
    //
    public function ver_asignar_horario(){
        $usuarios=user::all();
        return view('asignacion_horario', ['usuarios'=>$usuarios]);
    }
    public function asignar_horario(Request $request){
        $horario= new asignacion_horario();
        $horario->user_ci= $request->ci;
        $horario->dia=$request->dia;
        $horario->turno=$request->turno;
        $horario->save();
        return redirect('/menu');
    }
    public function ver_registro_vehiculo(){
        return view('registro_entrada_vehiculo');
    }
    public function registro_vehiculo(){

    }
}

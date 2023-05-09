<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class guardiaController extends Controller
{
    //
    public function ver_asignar_horario(){
        return view('asignacion_horario');
    }
    public function asignar_horario(){

    }
    public function ver_registro_vehiculo(){
        return view('registro_entrada_vehiculo');
    }
    public function registro_vehiculo(){

    }
}

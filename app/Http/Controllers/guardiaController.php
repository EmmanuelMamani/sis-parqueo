<?php

namespace App\Http\Controllers;

use App\Http\Requests\asignarRequest;
use App\Http\Requests\entradaVehiculoRequest;
use Illuminate\Http\Request;
use App\Models\asignacion_horario;
use App\Models\User;
use App\Models\parqueo;
use App\Models\entrada_vehiculo;
class guardiaController extends Controller
{
    //
    public function ver_asignar_horario(){
        $usuarios=user::all();
        return view('asignacion_horario', ['usuarios'=>$usuarios]);
    }
    public function asignar_horario(asignarRequest $request){
        $horario= new asignacion_horario();
        $horario->user_ci= $request->ci;
        $horario->dia=$request->dia;
        $horario->turno=$request->turno;
        $horario->save();
        return redirect('/menu');
    }
    public function ver_registro_vehiculo(){
        $parqueos=parqueo::all();
        return view('registro_entrada_vehiculo',['parqueos'=>$parqueos]);
    }
    public function registro_vehiculo(entradaVehiculoRequest $request){
        $entrada_vehiculo= new entrada_vehiculo();
        $entrada_vehiculo->vehiculo_placa=$request->placa;
        $entrada_vehiculo->fecha_entrada=$request->entrada;
        $entrada_vehiculo->hora_entrada=$request->entradaH;
        $entrada_vehiculo->hora_salida=$request->salidaH;
        $entrada_vehiculo->nro_plaza=$request->plaza;
        $entrada_vehiculo->save();
        return redirect('/menu');
    }
}

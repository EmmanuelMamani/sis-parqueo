<?php

namespace App\Http\Controllers;

use App\Http\Requests\parqueoRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\parqueo;
use App\Models\perfil;
use App\Models\vehiculo;
use App\Models\reserva;
class parqueoController extends Controller
{
    //
    public function ver_solicitar_parqueo(){
        $autos=Auth::user()->perfil->vehiculos;
        return view('solicitud_parqueo',['autos'=>$autos]);
    }
    public function solicitar_parqueo(Request $request){
            $solicutud= new reserva();
            $solicutud->vehiculo_placa=$request->vehiculo;
            $solicutud->fecha_entrada=$request->entrada;
            $solicutud->hora_entrada=$request->horaE;
            $solicutud->hora_salida=$request->horaS;
            $solicutud->save();
            return redirect('/menu');
    }
    public function ver_responder_solicitud(){

        return view('responder_solicitud');
    }
    public function responder_solicitud(){
        
    }
    public function ver_cambiar_parqueo(){
        return view('cambiar_plaza');
    }
    public function confirmacion_cambio_plaza(){
        return view('confirmacion_cambio_plaza');
    }
    public function cambiar_parqueo(){
        
    }
    public function ver_registrar_parqueo(){
        return view('registro_parqueo');
    }
    public function registrar_parqueo(parqueoRequest $request){
        $parqueo=new parqueo();
        $parqueo->nro_parqueo=$request->parqueo;
        $parqueo->dimesionH=$request->horizontal;
        $parqueo->dimesionV=$request->vertical;
        $parqueo->tipo_vehiculo=$request->tipo;
        $parqueo->precio=$request->precio;
        $parqueo->save();
        return redirect('/menu');
    }
    public function pagos_pendientes(){
        return view('pagos_pendientes');
    }
    public function ver_registro_pago(){
        return view('pagar_parqueo');
    }
    public function registro_pago(){
        
    }
    public function ver_solicitudes(){
        $reservas=reserva::all()->where('atendido',false);
        return view('solicitudes',['reservas'=>$reservas]);
    }
}

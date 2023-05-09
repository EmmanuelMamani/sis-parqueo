<?php

namespace App\Http\Controllers;

use App\Http\Requests\pagarRequest;
use App\Http\Requests\parqueoRequest;
use App\Models\pagos;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\parqueo;
use App\Models\perfil;

class parqueoController extends Controller
{
    //
    public function ver_solicitar_parqueo(){
        return view('solicitud_parqueo');
    }
    public function solicitar_parqueo(){

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
    public function registro_pago(pagarRequest $request){
        $pago=new pagos();
        $pago->motivo=$request->motivo;
        $perfil=perfil::where('user_ci',$request->ci)->get();
        $pago->perfil_id=$perfil->id;
        $pago->comprobante="enlacedelaimagendelcomprobante";
        $pago->save();

        return redirect('/menu');
    }
    public function ver_solicitudes(){
        return view('solicitudes');
    }
}

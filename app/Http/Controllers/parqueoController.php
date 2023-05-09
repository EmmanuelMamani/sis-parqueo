<?php

namespace App\Http\Controllers;

use App\Http\Requests\pagarRequest;
use App\Http\Requests\parqueoRequest;
use App\Models\pagos;
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
    public function ver_responder_solicitud($id){
        $reserva=reserva::find($id);
        $parqueos=parqueo::all();
        return view('responder_solicitud',['reserva'=>$reserva,'parqueos'=>$parqueos,'id'=>$id]);
    }
    public function responder_solicitud($id,Request $request){
        $reserva=reserva::find($id);
        $reserva->nro_plaza=$request->parqueo;
        $reserva->atendido=true;
        $reserva->save();

        return redirect('/menu');
    }
    public function ver_cambiar_parqueo(){
        $reservas=reserva::all()->where('atendido',true);
        return view('cambiar_plaza',['reservas'=>$reservas]);
    }
    public function confirmacion_cambio_plaza($id){
        
        $reserva=reserva::find($id);
        $parqueos=parqueo::all();
        return view('confirmacion_cambio_plaza',['reserva'=>$reserva,'parqueos'=>$parqueos,'id'=>$id]);
        
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
        $reservas=reserva::all()->where('atendido',false);
        return view('solicitudes',['reservas'=>$reservas]);
    }
}

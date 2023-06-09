<?php

namespace App\Http\Controllers;

use App\Http\Requests\solicitudRequest;
use App\Models\parqueo;
use App\Models\Respuesta;
use App\Models\SolicitudParqueo;
use App\Models\Vehiculo;
use Illuminate\Http\Request;
use App\Models\zona;
use Illuminate\Support\Facades\Auth;

class parqueoController extends Controller
{
    public function vista(){
        $vehiculos=Vehiculo::where('usuario_id',Auth::user()->id)->get();
        return view('solicitar_parqueo',['vehiculos'=>$vehiculos]);
    }

    public function registrar(solicitudRequest $request){
        $solicitud=new SolicitudParqueo();
        $solicitud->usuario_id=Auth::user()->id;
        $solicitud->fecha=$request->fecha;
        $solicitud->hora_inicio=$request->horaE;
        $solicitud->hora_fin=$request->horaS;
        $solicitud->save();
        return redirect(route('solicitar_parqueo'));
    }

    public function reservas(){
        $solicitudes=SolicitudParqueo::all()->where('respondido',false);
        return view('reservas',['solicitudes'=>$solicitudes]);
    }

    public function responder($id){
        $parqueos=parqueo::all();
        $solicitud=SolicitudParqueo::find($id);
        $ocupados= SolicitudParqueo::all()->where('respondido',1)->where('fecha',$solicitud->fecha);
        $zonas=zona::all();
        return view('responder_solicitud',['parqueos'=>$parqueos,'solicitud'=>$solicitud, 'ocupados'=>$ocupados,'zonas'=>$zonas]);
    }

    public function registrar_respuesta(Request $request){
        $respuesta=new Respuesta();
        $respuesta->parqueo_id=$request->parqueo;
        $respuesta->solicitud_id=$request->id;
        $respuesta->save();

        $solicitud=SolicitudParqueo::find($request->id);
        $solicitud->respondido=true;
        $solicitud->save();
        
        return redirect(route('reservas'));

    }
    public function reservas_respondidas(){
        $solicitudes=SolicitudParqueo::all()->where('respondido',true);
        return view('reservas_respondidas',['solicitudes'=>$solicitudes]);
    }
    public function ver_cambiar_parqueo($id){
        $parqueos=parqueo::all();
        $solicitud=SolicitudParqueo::find($id);
        $ocupados= SolicitudParqueo::all()->where('respondido',1)->where('fecha',$solicitud->fecha);
        $zonas=zona::all();
        return view('cambiar_parqueo',['parqueos'=>$parqueos,'solicitud'=>$solicitud, 'ocupados'=>$ocupados,'zonas'=>$zonas]);
    }
    public function cambiar(Request $request){
        $solicitud=SolicitudParqueo::find($request->id);
        $respuesta=$solicitud->respuesta;
        $respuesta->parqueo_id=$request->parqueo;
        $respuesta->save();
        return redirect(route('reservas_respondidas'));
    }
}

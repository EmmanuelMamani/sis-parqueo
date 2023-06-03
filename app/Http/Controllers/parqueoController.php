<?php

namespace App\Http\Controllers;

use App\Http\Requests\solicitudRequest;
use App\Models\SolicitudParqueo;
use App\Models\Vehiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class parqueoController extends Controller
{
    public function vista(){
        $vehiculos=Vehiculo::where('usuario_id',Auth::user()->id)->get();
        return view('solicitar_parqueo',['vehiculos'=>$vehiculos]);
    }

    public function registrar(solicitudRequest $request){
        $solicitud=new SolicitudParqueo();
        $solicitud->usuario_id=Auth::user();
        $solicitud->fecha=$request->fecha;
        $solicitud->hora_inicio=$request->horaE;
        $solicitud->hora_salida=$request->horaS;
        return true;
    }
}

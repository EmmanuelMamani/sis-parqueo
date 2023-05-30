<?php

namespace App\Http\Controllers;
use \DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
use App\Models\pagoqr;
use Validator;


class pagosqrcontroller extends Controller
{
    //

    public function store(Request $request)
    {
        //guardar datos
        //datos de personas facturas

        $this->validate($request, [
            'nombre' => 'required|string',
            'ci' => 'required',
            'detalle' => 'required|string',
            'comprobante' => 'required|image|max:2048',
            

        ]);
        
        $pago = new pagoqr();
        $pago->nombre = $request['nombre'];
        $pago->ci = $request['ci'];
        $pago->detalle = $request['detalle'];
        $pago->monto= $request['monto'];
      
        $imagen = $request->file('comprobante')->store('public/imagenes');
        $url = Storage::url($imagen);
        $pago->comprobante = $url;
        //$personas->detalle = $request['detalle'];
        
        $pago->save();

        return redirect()->back()->with('status','El pago se efectuo exitosamente! ');
        
    }
}

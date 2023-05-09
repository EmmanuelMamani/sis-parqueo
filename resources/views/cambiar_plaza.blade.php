@extends('header')
@section('estilos')
<link rel="stylesheet" href="{{asset('css/menu.css')}}" />
@endsection
@section('contenido')
    <div id="opciones">
        @foreach ($reservas as $reserva)
        <a href="{{route('confirmacion_cambio_plaza',['id'=>$reserva->id])}}" class="btn opcion">{{$reserva->fecha_entrada}} {{$reserva->vehiculo->perfil->usuario->name}} {{$reserva->vehiculo->perfil->usuario->last_name}}</a>
        @endforeach
    </div>
@endsection
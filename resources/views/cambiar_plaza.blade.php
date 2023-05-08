@extends('header')
@section('estilos')
<link rel="stylesheet" href="{{asset('css/menu.css')}}" />
@endsection
@section('contenido')
    <div id="opciones">
        <a href="{{route('confirmacion_cambio_plaza')}}" class="btn opcion">2023-05-07   Docente</a>
    </div>
@endsection
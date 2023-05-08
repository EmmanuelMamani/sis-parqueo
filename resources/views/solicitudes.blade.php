@extends('header')
@section('estilos')
<link rel="stylesheet" href="{{asset('css/menu.css')}}" />
@endsection
@section('contenido')
    <div id="opciones">
        <a href="{{route('responder_solicitud')}}" class="btn opcion">2023-05-07   Docente</a>
    </div>
@endsection
@extends('header')
@section('estilos')
<link rel="stylesheet" href="{{asset('css/menu.css')}}" />
@endsection
@section('contenido')
    <div id="opciones">
        <a href="{{route('pagar_parqueo')}}" class="btn opcion">2023-05-07   500.00 Bs</a>
    </div>
@endsection
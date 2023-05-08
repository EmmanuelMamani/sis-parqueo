@extends('header')
@section('estilos')
<link rel="stylesheet" href="{{asset('css/menu.css')}}" />
@endsection
@section('contenido')
    <div class="row">
        <div id="lateral" class="col col-3">
            <a href="#">Usuarios</a>
            <a href="#">Parqueos</a>
        </div>
        <div id="opciones" class="col">
            <a href="{{route('registro_usuario')}}" class="btn opcion">Registrar Usuario</a>
            <a href="{{route('asignar_rol')}}" class="btn opcion">Asignar rol a usuario</a>
            <a href="{{route('asignar_horario')}}" class="btn opcion">Asignar de horarios</a>
            <a href="{{route('solicitud_parqueo')}}" class="btn opcion">Solicitud de parqueo</a>
            <a href="{{route('registro_entrada_vehiculo')}}" class="btn opcion">Registro de entrada vehicular</a>
            <a href="{{route('solicitudes')}}" class="btn opcion">Responder solicitudes</a>
            <a href="{{route('cambiar_plaza')}}" class="btn opcion">Cambiar plaza</a>
            <a href="{{route('registro_parqueo')}}" class="btn opcion">Registrar parqueo</a>
            <a href="{{route('pagos_pendientes')}}" class="btn opcion">Pagos pendientes</a>
        </div>
    </div>
@endsection

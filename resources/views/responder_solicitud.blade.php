@extends('vista')
@section('main')
    <form action="" id="formulario">
        <h3>Responder solicitud</h3>
        <span>Cliente: nombre cliente</span><br>
        <span>Fecha: 30/05/2023</span><br>
        <span>Hora: 15:45</span><br>
        <label for="">Seleccionar parqueo:</label>
        <select name="" id="" class="form-select">
            @foreach ($parqueos as $parqueo)
                <option value="{{$parqueo->id}}">{{$parqueo->numero. "-". $parqueo->zona->nombre}}</option>
            @endforeach
        </select>
        <div class="row">
            <button class="col btn" id="asignar">Registrar</button>
            <div class="col btn" id="cancelar"><a href="{{route('reservas')}}">Cancelar</a></div>
        </div>
    </form>
@endsection
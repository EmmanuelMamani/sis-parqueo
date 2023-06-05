@extends('vista')
@section('main')
    <h3>Zonas</h3>
    @foreach ( $zonas as $zona)
            <h4>{{$zona->nombre}}</h4>
                <div class="d-flex flex-wrap">
                    @foreach ($zona->parqueos as $parqueo)
                        <div class="col-3 libre" id="{{$parqueo->id}}">{{$parqueo->numero}}</div>
                    @endforeach
                </div>
    @endforeach
    <div>
        <form action="{{route('registrar_zona')}}" method="POST">
            @csrf
            <h3>Crear Zona</h3>
            <label for="">Nombre de zona:</label>
            <input type="text" name="nombre" class="form-control">
            <label for="">Nro de parqueos:</label>
            <input type="number" name="parqueos" class="form-control">
            <input type="submit" value="Registrar" class="btn btn-primary mt-1">
        </form>
    </div>
    <div>
        <form action="{{route('editar_zona')}}" method="POST">
            @csrf
            <h3>Editar Zona</h3>
            <label for="">Nombre de zona:</label>
            <select name="zona" class="form-select">
                @foreach ($zonas as $zona)
                    <option value="{{$zona->id}}">{{$zona->nombre}}</option>
                @endforeach
            </select>
            <label for="">Nro de parqueos:</label>
            <input type="number" name="parqueos" class="form-control">
            <input type="submit" value="Registrar" class="btn btn-primary mt-1">
        </form>
    </div>
@endsection
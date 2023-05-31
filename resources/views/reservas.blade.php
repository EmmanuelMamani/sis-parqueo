@extends('vista')
@section('main')
<h3>Control de pagos</h3>
<div>
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Fecha</th>
                        <th>Responder</th>
                        <th>Cambiar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr> 
                        <th>1</th>
                        <th>Nombre Usuario</th>
                        <th>30/05/2023</th>
                        <th><a href="{{route('responder_solicitud')}}">Responder</a></th>
                        <th><a href="{{route('cambiar_parqueo')}}">Cambiar</a></th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
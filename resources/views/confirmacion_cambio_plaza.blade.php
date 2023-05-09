<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sis-Parqueo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{asset('css/login.css')}}" />
</head>
<body>
    <div id="formulario">
        <form action="{{route('responder_solicitud',['id'=>$id])}}" method="post" >
            @csrf
            <h3>Cambiar solicitudes</h3>
            <h4>Nombre del solicitante</h4>
            <h5> {{$reserva->vehiculo->perfil->usuario->name}} {{$reserva->vehiculo->perfil->usuario->last_name}}</h5>
            <h4>Correo Electronico</h4>
            <h5>{{$reserva->vehiculo->perfil->usuario->email}}</h5>
            <h4>Telefono</h4>
            <h5>{{$reserva->vehiculo->perfil->telefono}}</h5>
            <label>Asignar espacio:</label><br>
            <select name="parqueo" class="form-select">
                @foreach ($parqueos as $parqueo )
                    <option value="{{$parqueo->nro_parqueo}}">{{$parqueo->nro_parqueo}}</option>
                @endforeach
            </select>
            <div class="row">
                <div class="col">
                    <a href="{{route('menu')}}" id="cancelar" class="btn">Cancelar</a>
                </div>
                <div class="col">
                    <input type="submit" value="Asignar" class="btn" id="acceder">
                </div>
            </div>
        </form>
    </div>
</body>
</html>
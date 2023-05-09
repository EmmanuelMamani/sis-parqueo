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
    <link rel="stylesheet" href="{{asset('css/horario.css')}}" />
</head>
<body>
    <div id="azul">
        <h3>Asignacion de horario de atencion</h3>
        <div id="negro">
            <h3>Bienvenido-------------</h3>
            <form action="{{route('asignar_horario')}}" id="formulario" method="POST">
                @csrf
                <label for="">Carnet de identidad</label>
                <div class="row">
                    <div class="col col-8"><input type="text" class="form-control"  name="ci" id="usuario" value="{{old('ci')}}"></div>
                    <div class="col"><span class="btn" id="buscar">Buscar</span></div>
                </div>
                <label for="">Tipo de usuario detectado</label><br>
                <input type="text" disabled class="form-control" id="tipo">
                <div class="row">
                    <div class="col">Elige un turno</div>
                    <div class="col">Elige dia de atencion</div>
                </div>
                <div class="row">
                    <div class="col">
                        <select name="turno" class="form-select">
                            <option value="mañana">06:00-13:00</option>
                            <option value="tarde">13:30-22:00</option>
                        </select>
                    </div>
                    <div class="col">
                        <select name="dia" class="form-select">
                            <option value="lunes">Lunes</option>
                            <option value="martes">Martes</option>
                            <option value="miercoles">miercoles</option>
                            <option value="jueves">Jueves</option>
                            <option value="viernes">Viernes</option>
                            <option value="sabado">Sabado</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <a href="{{route('menu')}}" id="volver" class="btn">Volver</a>
                    </div>
                    <div class="col">
                        <input type="submit" value="Asignar" class="btn" id="asignar">
                    </div>
                </div>
            </form>
        </div>
    </div>
<script>
    var buscar=document.getElementById("buscar");
    var tipo=document.getElementById("tipo");
    buscar.onclick=function(){
        var usuario=document.getElementById("usuario");
        tipo.value="usuario no encontrado"
        @foreach ($usuarios as $usuario)
            if(usuario.value=='{{$usuario->ci}}'){
                tipo.value='{{$usuario->rol->name}}'
            }
        @endforeach
    }
</script>
</body>
</html>
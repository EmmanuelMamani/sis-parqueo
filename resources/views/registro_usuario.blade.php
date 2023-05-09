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
        <form action="{{route('registro_usuario')}}" method="post" >
            @csrf
            <h3>Crear cuenta</h3>
            <div class="row">
                <div class="col col-6">
                    <input type="text" name="name" placeholder="Nombres" class="form-control input" value="{{old('name')}}">
                    @if ($errors->has('name'))
                    <span class="error text-danger" for="name">{{ $errors->first('name') }}</span><br>
                    @endif
                </div>
                <div class="col col-6">
                    <input type="text" name="last_name" placeholder="Apellidos" class="form-control input" value="{{old('last_name')}}">
                    @if ($errors->has('last_name'))
                    <span class="error text-danger" for="last_name">{{ $errors->first('last_name') }}</span><br>
                    @endif
                </div>
            </div>
            <input type="text" name="email" placeholder="Correo electronico" class="form-control input" value="{{old('email')}}">
            @if ($errors->has('email'))
            <span class="error text-danger" for="email">{{ $errors->first('email') }}</span><br>
            @endif
            <input type="text" name="ci" placeholder="Cedula de identidad" class="form-control input" value="{{old('ci')}}">
            @if ($errors->has('ci'))
            <span class="error text-danger" for="ci">{{ $errors->first('ci') }}</span><br>
            @endif
            <input type="password" name="password" placeholder="Contraseña" class="form-control input" value="{{old('password')}}">
            @if ($errors->has('password'))
            <span class="error text-danger" for="password">{{ $errors->first('password') }}</span><br>
            @endif
            <label class="label">Seleccione un rol:</label><br>
            <select name="rol" class="form-select">
                @foreach ($roles as $rol )
                <option value="{{$rol->id}}">{{$rol->name}}</option>
                @endforeach
            </select>
            <div class="row">
                <div class="col">
                    <a href="{{route('menu')}}" id="cancelar" class="btn">Cancelar</a>
                </div>
                <div class="col">
                    <input type="submit" value="Registrar" class="btn" id="acceder">
                </div>
            </div>
        </form>
    </div>
</body>
</html>
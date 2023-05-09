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
        <form action="{{route('perfil_completo')}}" method="post" >
            @csrf
            <h3>Completar perfil</h3>
            <input type="text" name="telefono" placeholder="Telefono" class="form-control input" value="{{old('telefono')}}">
           @error('telefono')
               <span class="error text-danger">{{$message}}</span><br>
           @enderror
            <input type="text" name="descripcion" placeholder="Descripcion de la cuenta" class="form-control input" value="{{old('descripcion')}}">
            @error('descripcion')
            <span class="error text-danger">{{$message}}</span><br>
        @enderror
            <input type="text" name="direccion" placeholder="Direccion de residencia" class="form-control input" value="{{old('direccion')}}">
            @error('direccion')
            <span class="error text-danger">{{$message}}</span><br>
        @enderror
            <input type="date" name="nacimiento" placeholder="Fecha de nacimiento" class="form-control input" value="{{old('nacimiento')}}">
            @error('nacimiento')
            <span class="error text-danger">{{$message}}</span><br>
        @enderror
            <input type="text" name="licencia" placeholder="Licencia de conducir" class="form-control input" value="{{old('licencia')}}">
            @error('licencia')
            <span class="error text-danger">{{$message}}</span><br>
        @enderror
            <input type="text" name="ocupacion" placeholder="Ocupacion/Cargo" class="form-control input" value="{{old('ocupacion')}}">
            @error('ocupacion')
            <span class="error text-danger">{{$message}}</span><br>
        @enderror
            <label>Vehiculo:</label><br>
            <input type="text" name="marca" placeholder="Marca" class="form-control input" value="{{old('marca')}}">
            @error('marca')
            <span class="error text-danger">{{$message}}</span><br>
        @enderror
            <input type="text" name="modelo" placeholder="Modelo" class="form-control input" value="{{old('modelo')}}">
            @error('modelo')
            <span class="error text-danger">{{$message}}</span><br>
        @enderror
            <input type="text" name="año" placeholder="Año" class="form-control input" value="{{old('año')}}">
            @error('año')
            <span class="error text-danger">{{$message}}</span><br>
        @enderror
            <input type="text" name="placa" placeholder="Placa" class="form-control input" value="{{old('placa')}}">
            @error('placa')
            <span class="error text-danger">{{$message}}</span><br>
        @enderror
            <label>Tipo de vehiculo:</label><br>
            <select name="rol" class="form-select">
                <option value="1">Tipo de vehiculo</option>
            </select>
            <input type="text" name="soat" placeholder="Soat" class="form-control input">
            <div class="row">
                <div class="col">
                    <a href="{{route('menu')}}" id="cancelar" class="btn">Cancelar</a>
                </div>
                <div class="col">
                    <input type="submit" value="Completar" class="btn" id="acceder">
                </div>
            </div>
        </form>
    </div>
</body>
</html>
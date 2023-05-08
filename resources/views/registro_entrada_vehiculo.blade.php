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
        <form action="" method="post" >
            @csrf
            <h3>Registro de entrada vehicular</h3>
            <label>Placa:</label><br>
            <input type="text" name="placa" placeholder="Placa del vehiculo" class="form-control input">
            <label>Fecha de entrada</label><br>
            <input type="date" name="entrada" class="form-control input">
            <label>Hora entrada:</label><br>
            <input type="time" name="entradaH" class="form-control input">
            <label>Hora salida:</label><br>
            <input type="time" name="salidaH" class="form-control input">
            <label>Nro. plaza ocupada:</label><br>
            <input type="number" name="plaza" class="form-control input">
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
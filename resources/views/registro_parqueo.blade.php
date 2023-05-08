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
        <h3>Registrar lugar de parqueo</h3>
        <div id="negro">
            <form action="" id="formulario">
                <label for="">Nro. Parqueo</label><br>
                <input type="number" class="form-control">
                <label>Dimenciones en m</label>br
                <div class="row">
                    <div class="col">Horizontal</div>
                    <div class="col">Tipo de vehiculo</div>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="number" class="form-control">
                    </div>
                    <div class="col">
                        <select name="dia" class="form-select">
                            <option value="camioneta">Coche</option>
                            <option value="camioneta">Camioneta</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 col">
                        <label for="">Vertical</label><br>
                        <input type="number" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 col">
                        <label for="">Precio asignado</label><br>
                        <input type="number" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <a href="{{route('menu')}}" id="volver" class="btn">Volver</a>
                    </div>
                    <div class="col">
                        <input type="submit" value="Registrar" class="btn" id="asignar">
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
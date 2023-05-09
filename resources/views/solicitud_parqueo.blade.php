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
        <link rel="stylesheet" href="{{asset('css/solicitud.css')}}" />
</head>
<body>
   <div class="row" id="contenedor">
    <div class="col" id="parqueo">
       <h3>Parqueo</h3>
       <img id="imagen" src="https://previews.123rf.com/images/bigmouse/bigmouse1706/bigmouse170600043/80269250-zonas-urbanas-de-estacionamiento-de-dibujos-animados-con-dise%C3%B1o-de-vista-superior-de-cars-de-color.jpg" alt="">
    </div>
    <div class="col" id="solicitar">
        <form action="{{route('solicitud_parqueo')}}" method="post">
            @csrf
            <h3>Solicitar Parqueo</h3>
            <label>Vehiculo</label><br>
            <select name="vehiculo" class="form-select">
                @foreach ($autos as $auto )
                    <option value="{{$auto->placa}}">{{$auto->modelo}} {{$auto->placa}}</option>
                @endforeach
            </select>
            <label>Fecha de reserva</label><br>
            <input type="date" name="entrada" class="form-control ">
            <label>Hora de entrada</label><br>
            <select name="horaE" class="form-select">
                <option value="06:00">06:00</option>
                <option value="07:00">07:00</option>
                <option value="08:00">08:00</option>
                <option value="09:00">09:00</option>
                <option value="10:00">10:00</option>
                <option value="11:00">11:00</option>
                <option value="12:00">12:00</option>
                <option value="13:00">13:00</option>
                <option value="14:00">14:00</option>
                <option value="15:00">15:00</option>
                <option value="16:00">16:00</option>
                <option value="17:00">17:00</option>
                <option value="18:00">18:00</option>
                <option value="19:00">19:00</option>
                <option value="20:00">20:00</option>
                <option value="21:00">21:00</option>
            </select>
            <label>Hora de salida</label><br>
            <select name="horaS" class="form-select">
                <option value="07:00">07:00</option>
                <option value="08:00">08:00</option>
                <option value="09:00">09:00</option>
                <option value="10:00">10:00</option>
                <option value="11:00">11:00</option>
                <option value="12:00">12:00</option>
                <option value="13:00">13:00</option>
                <option value="14:00">14:00</option>
                <option value="15:00">15:00</option>
                <option value="16:00">16:00</option>
                <option value="17:00">17:00</option>
                <option value="18:00">18:00</option>
                <option value="19:00">19:00</option>
                <option value="20:00">20:00</option>
                <option value="21:00">21:00</option>
                <option value="22:00">22:00</option>
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
   </div>
</body>
</html>
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
        <form action="{{route('pagar_parqueo')}}" method="post" >
            @csrf
           <h3>Pagos a travez de codigo QR</h3>
           <div class="row">
                <div class="col-6">
                    <label>Nombre del cliente</label>
                    <input type="text" class="form-control input" name='name' value="{{old('name')}}"><br>
                    @error('name')
                    <span class="error text-danger">{{$message}}</span><br>
                    @enderror
                    <label>Motivo de pago</label>
                    <input type="text" class="form-control input" name="motivo" value="{{old('motivo')}}"><br>
                    @error('motivo')
                    <span class="error text-danger">{{$message}}</span><br>
                    @enderror
                    <label>Carnet de identidad</label>
                    <input type="text" class="form-control input" name="ci" value="{{old('ci')}}"><br>
                    @error('ci')
                    <span class="error text-danger">{{$message}}</span><br>
                    @enderror
                </div>
                <div class="col-6">
                    <label>Comprobante</label>br
                    <input type="file"class="form-control input" name="comprobante">
                    @error('comprobante')
                    <span class="error text-danger">{{$message}}</span><br>
                    @enderror
                    <img id="imagen" src="https://borealtech.com/wp-content/uploads/2018/10/codigo-qr-1024x1024-1.jpg" alt="">
                </div>
           </div>
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
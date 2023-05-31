@extends('vista')
@section('main')
    <h3>Cuotas de clientes</h3><br>
    <label for="">Correo electronico:</label>
    <input type="text" readonly value="cliente@gmail.com" class="form-control input"><br>
    <label for="">Numero CI:</label>
    <input type="text" readonly value="14785236" class="form-control input">
    <br>
    <div>
        <div class="card">
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Fecha</th>
                            <th>Mes</th>
                            <th>Detalle</th>
                            <th>Efectivo</th>
                            <th>Estado</th>
                            <th>Cantidad</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr> 
                            <th>30/05/2023</th>
                            <th>Mayo</th>
                            <th>Plaza 1</th>
                            <th>200 Bs.</th>
                            <th>Pagado</th>
                            <th>200 Bs.</th>
                        </tr>
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>400 Bs.</th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@extends('vista')
@section('main')
<form action="" id="formulario">
    <h3>Solicitud de parqueo</h3>
    <label for="auto">Vehiculo:</label>
    <select name="auto" id="auto" class="form-select">
        <option value="">rum rum</option>
    </select>
    <label for="fecha">Fecha:</label>
    <input type="date" name="fecha" id="fecha" class="form-control">
    <label for="horaE">Hora inicio:</label>
    <select name="horaE" id="horaE" class="form-select">
        <option value="">08:00</option>
    </select>
    <label for="horaS">Hora inicio:</label>
    <select name="horaS" id="horaS" class="form-select">
        <option value="">08:00</option>
    </select>
    <input type="submit" value="Solicitar" class="btn" id="enviar">
</form>
@endsection
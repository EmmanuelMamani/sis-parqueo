@extends('vista')
@section('main')
    <form action="">
        <h3>Convocatoria UMSS</h3>
        <label for="">Seleccionar pdf:</label>
        <input type="file" name="pdf" class="form-control">
        <label for="">Asunto:</label>
        <input type="text" name="asunto" class="form-control">
        <input type="submit" value="Enviar" class="btn btn-primary mt-3">
    </form>
@endsection
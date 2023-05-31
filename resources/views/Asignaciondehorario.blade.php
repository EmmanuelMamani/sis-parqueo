@extends('vista')
@section('main')
<form id="formulario">
	<h1>Formulario de Asignacion</h1>
	<div class='field'>
		<label>Nombre</label>
		<input name='nombre' type='name' required value="" placeholder='Nombre' autocomplete class="form-control" />
	</div>
	<div class='field'>
		<label>cedula de identidad</label>
		<input name='cedula' type='text' required value="" placeholder='ingrese su ci' class="form-control"/>
	</div>
	<div class='field'>
		<label>Estado laboral</label>
		<select name='estadoLaboral' required class="form-select">
			<option selected disabled>Sel. una opción</option>
			<option>administrativo</option>
			<option>operador</option>
			<option>seguridad</option>
		</select>
	</div>
	<div class='field'>
		<label>Elija turno</label>
		<select name='estadoLaboral' required class="form-select">
			<option selected disabled>Sel. una opción</option>
			<option>06:00 - 13:30</option>
			<option>13:30 - 22:00</option>
		</select>
	</div>
	<div class='field'>
		<label>Elija dias de trabajo</label>
		<select name='estadoLaboral' required class="form-select">
			<option selected disabled>Sel. una opción</option>
			<option>LUNES</option>
			<option>MARTES</option>
			<option>MIERCOLES</option>
			<option>JUEVES</option>
			<option>VIERNES</option>
			<option>SABADO</option>
		</select>
	</div>

	<div class='submit'>
		<button class="submit btn" id="asignar">ASIGNARME</button>
		<a href="login.html" class="back_btn btn" id="cancelar"><b>ATRAS</b></a>
	</div>
</form>
@endsection


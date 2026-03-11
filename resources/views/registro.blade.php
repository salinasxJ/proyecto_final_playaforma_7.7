@extends('layout')

@section('contenido')

<h1>Registro</h1>

<form>

<label>Nombre</label>
<br>
<input type="text">

<br><br>

<label>Email</label>
<br>
<input type="email">

<br><br>

<label>Contraseña</label>
<br>
<input type="password">

<br><br>

<button class="boton">Registrarse</button>

</form>

@endsection
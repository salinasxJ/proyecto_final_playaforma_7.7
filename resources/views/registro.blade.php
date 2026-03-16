@extends('layout')

@section('contenido')

<div class="registro-container">

<div class="registro-card">

<h2>Crear cuenta</h2>

<form>

<label>Nombre completo</label>
<input type="text" placeholder="Tu nombre">

<label>Username</label>
<input type="text" placeholder="Nombre de usuario">

<label>Email</label>
<input type="email" placeholder="Correo electrónico">

<label>Contraseña</label>
<input type="password" id="password" placeholder="Crea una contraseña">

<div class="fuerza-password">
<div id="barra"></div>
</div>

<p id="mensaje"></p>

<label>Confirmar contraseña</label>
<input type="password" id="confirmar" placeholder="Confirma tu contraseña">

<p id="coincidencia"></p>

<button class="btn-registro">
Crear cuenta
</button>

</form>

</div>

</div>

@endsection
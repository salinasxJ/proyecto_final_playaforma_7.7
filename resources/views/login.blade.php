@extends('layout')

@section('contenido')

<div class="login-container">

<div class="login-card">

<h2>Iniciar sesión</h2>

<form>

<label>Email</label>
<input type="email" placeholder="Ingresa tu email">

<label>Contraseña</label>
<input type="password" placeholder="Ingresa tu contraseña">

<button class="btn-login">
Ingresar
</button>

</form>

</div>

</div>

@endsection
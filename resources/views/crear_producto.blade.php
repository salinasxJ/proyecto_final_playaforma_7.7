@extends('layout')

@section('contenido')

<h2>Crear producto</h2>

<form action="/guardar-producto" method="POST">

@csrf

<input type="text" name="nombre" placeholder="Nombre producto">

<input type="text" name="descripcion" placeholder="Descripcion">

<input type="number" name="precio" placeholder="Precio">

<input type="number" name="stock" placeholder="Stock">

<button type="submit">
Guardar producto
</button>

</form>

@endsection
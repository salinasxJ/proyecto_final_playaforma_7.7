@extends('layout')

@section('contenido')

<h1>Crear Producto</h1>

<form action="/guardar-producto" method="POST">

@csrf

<input type="text" name="nombre" placeholder="Nombre del producto">

<br><br>

<textarea name="descripcion" placeholder="Descripción"></textarea>

<br><br>

<input type="number" name="precio" placeholder="Precio">

<br><br>

<input type="text" name="imagen" placeholder="Nombre de la imagen">

<br><br>

<button type="submit">Guardar producto</button>

</form>

@endsection
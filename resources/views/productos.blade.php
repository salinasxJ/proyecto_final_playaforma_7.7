@extends('layout')

@section('contenido')

<h1>Productos</h1>
<input type="text" id="buscar" placeholder="Buscar producto..." class="buscar">
<div class="productos">

<div class="producto">
<img src="https://via.placeholder.com/200">
<h3>Camiseta Negra</h3>
<p>$50.000</p>
<button class="boton">Agregar al carrito</button>
</div>

<div class="producto">
<img src="https://via.placeholder.com/200">
<h3>Sudadera Blanca</h3>
<p>$90.000</p>
<button class="boton">Agregar al carrito</button>
</div>

<div class="producto">
<img src="https://via.placeholder.com/200">
<h3>Gorra Urbana</h3>
<p>$35.000</p>
<button class="boton">Agregar al carrito</button>
</div>

</div>

@endsection
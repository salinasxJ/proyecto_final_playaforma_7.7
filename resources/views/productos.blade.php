@extends('layout')

@section('contenido')

<h1 class="titulo-productos">Nuestros Productos</h1>

<div class="grid-productos">

<div class="producto">
<img src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b" alt="Camiseta">
<h3>Camiseta Negra</h3>
<p class="precio">$50.000</p>
<button onclick="agregarCarrito('Camiseta Negra')" class="boton-agregar">
<i class="fa-solid fa-cart-plus"></i> Agregar
</button>
</div>

<div class="producto">
<img src="https://images.unsplash.com/photo-1520975922071-a6a5f1e6c9d0" alt="Hoodie">
<h3>Hoodie Blanca</h3>
<p class="precio">$90.000</p>
<button onclick="agregarCarrito('Hoodie Blanca')" class="boton-agregar">
<i class="fa-solid fa-cart-plus"></i> Agregar
</button>
</div>

<div class="producto">
<img src="https://images.unsplash.com/photo-1520975698519-59a5c6b0c0e1" alt="Gorra">
<h3>Gorra Urbana</h3>
<p class="precio">$35.000</p>
<button onclick="agregarCarrito('Gorra Urbana')" class="boton-agregar">
<i class="fa-solid fa-cart-plus"></i> Agregar
</button>
</div>

</div>

@endsection
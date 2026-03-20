@extends('layout')

@section('contenido')

<h1 class="titulo-productos">Nuestros Productos</h1>

<!-- BUSCADOR -->
<input type="text" id="buscar" placeholder="Buscar productos..." class="buscador">

<div class="grid-productos">

<!-- PRODUCTO 1 -->
<div class="producto">
<img src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b">
<h3>Camiseta Negra</h3>
<p class="precio">$50.000</p>

<button onclick="agregarCarrito('Camiseta Negra',50000,'https://images.unsplash.com/photo-1523381210434-271e8be1f52b')" class="boton-agregar">
<i class="fa-solid fa-cart-plus"></i> Agregar
</button>
</div>

<!-- PRODUCTO 2 EN PROMO -->
<div class="producto promo">

<span class="badge">🔥 Oferta</span>

<img src="https://images.unsplash.com/photo-1520975922071-a6a5f1e6c9d0">
<h3>Hoodie Blanca</h3>

<p class="precio-antiguo">$120.000</p>
<p class="precio">$90.000</p>

<button onclick="agregarCarrito('Hoodie Blanca',90000,'https://images.unsplash.com/photo-1520975922071-a6a5f1e6c9d0')" class="boton-agregar">
<i class="fa-solid fa-cart-plus"></i> Agregar
</button>

</div>

<!-- PRODUCTO 3 -->
<div class="producto">
<img src="https://images.unsplash.com/photo-1520975698519-59a5c6b0c0e1">
<h3>Gorra Urbana</h3>
<p class="precio">$35.000</p>

<button onclick="agregarCarrito('Gorra Urbana',35000,'https://images.unsplash.com/photo-1520975698519-59a5c6b0c0e1')" class="boton-agregar">
<i class="fa-solid fa-cart-plus"></i> Agregar
</button>
</div>

</div>

@endsection
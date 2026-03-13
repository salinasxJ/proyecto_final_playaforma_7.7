@extends('layout')

@section('contenido')

<h1 class="titulo-carrito">
<i class="fa-solid fa-cart-shopping"></i> Carrito de Compras
</h1>

<div class="carrito-container">

<div class="carrito-vacio">

<i class="fa-solid fa-cart-shopping carrito-icono"></i>

<p>No hay productos en el carrito</p>

<a href="/siete_punto_siete/public/productos" class="boton-comprar">
Ver productos
</a>

</div>

</div>

@endsection
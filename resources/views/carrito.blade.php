@extends('layout')

@section('contenido')

<h1 class="titulo-carrito">
<i class="fa-solid fa-cart-shopping"></i> Carrito de Compras
</h1>

<div class="carrito-container">

<div id="carrito-contenido"></div>

</div>

<script>

function mostrarCarrito(){

let carrito = JSON.parse(localStorage.getItem("carrito")) || [];

let contenedor = document.getElementById("carrito-contenido");

if(carrito.length === 0){

contenedor.innerHTML = `
<div class="carrito-vacio">

<i class="fa-solid fa-cart-shopping carrito-icono"></i>

<p>No hay productos en el carrito</p>

<a href="/siete_punto_siete/public/productos" class="boton-comprar">
Ver productos
</a>

</div>
`;

return;

}

let html = "";
let total = 0;

carrito.forEach((producto,index)=>{

let subtotal = producto.precio * producto.cantidad;

html += `
<div class="producto-carrito">

<h3>${producto.nombre}</h3>

<p>$${producto.precio}</p>

<input type="number" min="1" value="${producto.cantidad}" 
onchange="cambiarCantidad(${index},this.value)">

<button onclick="eliminarProducto(${index})">
Eliminar
</button>

<p>Subtotal: $${subtotal}</p>

</div>
`;

total += subtotal;

});

html += `
<h2>Total: $${total}</h2>

<button onclick="vaciarCarrito()" class="boton-vaciar">
Vaciar carrito
</button>

<button onclick="pagar()" class="boton-pagar">
Finalizar compra
</button>
`;

contenedor.innerHTML = html;

}

function eliminarProducto(index){

let carrito = JSON.parse(localStorage.getItem("carrito")) || [];

carrito.splice(index,1);

localStorage.setItem("carrito",JSON.stringify(carrito));

mostrarCarrito();

}

function cambiarCantidad(index,cantidad){

let carrito = JSON.parse(localStorage.getItem("carrito")) || [];

carrito[index].cantidad = parseInt(cantidad);

localStorage.setItem("carrito",JSON.stringify(carrito));

mostrarCarrito();

}

function vaciarCarrito(){

localStorage.removeItem("carrito");

mostrarCarrito();

}

function pagar(){

let carrito = JSON.parse(localStorage.getItem("carrito")) || [];

if(carrito.length === 0){

alert("Tu carrito está vacío");

return;

}

alert("Compra realizada con éxito");

localStorage.removeItem("carrito");

location.reload();

}

mostrarCarrito();

</script>

@endsection
@extends('layout')

@section('contenido')

<h1>Finalizar Compra</h1>

<div class="checkout-container">

<div id="resumen"></div>

<h2>Datos del cliente</h2>

<input type="text" placeholder="Nombre completo" class="input-checkout">
<input type="text" placeholder="Dirección" class="input-checkout">
<input type="text" placeholder="Teléfono" class="input-checkout">

<button onclick="confirmarCompra()" class="boton-pagar">
Confirmar compra
</button>

</div>

<script>

function cargarResumen(){

let carrito = JSON.parse(localStorage.getItem("carrito")) || [];
let contenedor = document.getElementById("resumen");

let html = "";
let total = 0;

carrito.forEach(p => {

let subtotal = p.precio * p.cantidad;

html += `
<div class="producto-carrito">
<p>${p.nombre} x${p.cantidad}</p>
<p>$${subtotal}</p>
</div>
`;

total += subtotal;

});

html += `<h2>Total: $${total}</h2>`;

contenedor.innerHTML = html;

}

function confirmarCompra(){

alert("✅ Compra realizada con éxito");

localStorage.removeItem("carrito");

window.location.href = "/siete_punto_siete/public/";
}

cargarResumen();

</script>

@endsection
@extends('layout')

@section('contenido')

<!-- HERO -->
<section class="hero">
    <div class="hero-texto">
        <h1>Viste con actitud 🔥</h1>
        <p>Las mejores prendas urbanas al mejor precio</p>

        <a href="/siete_punto_siete/public/productos" class="boton-principal">
            Explorar tienda
        </a>
    </div>
</section>

<!-- CONTADOR -->
<div class="contador-oferta">
⏳ Oferta termina en: <span id="tiempo"></span>
</div>

<!-- PRODUCTOS DESTACADOS -->
<h2 class="seccion">🔥 Productos Destacados</h2>

<div class="grid-productos">

    <div class="producto">
        <span class="badge-top">TOP</span>
        <img src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b">
        <h3>Camiseta Negra</h3>
        <p class="precio">$50.000</p>
    </div>

    <div class="producto">
        <img src="https://images.unsplash.com/photo-1520975922071-a6a5f1e6c9d0">
        <h3>Hoodie Blanca</h3>
        <p class="precio">$90.000</p>
    </div>

    <div class="producto">
        <img src="https://images.unsplash.com/photo-1520975698519-59a5c6b0c0e1">
        <h3>Gorra Urbana</h3>
        <p class="precio">$35.000</p>
    </div>

</div>

<!-- BENEFICIOS -->
<div class="beneficios">

    <div class="beneficio">
        <i class="fa-solid fa-truck"></i>
        <p>Envío gratis</p>
    </div>

    <div class="beneficio">
        <i class="fa-solid fa-credit-card"></i>
        <p>Pago seguro</p>
    </div>

    <div class="beneficio">
        <i class="fa-solid fa-star"></i>
        <p>Alta calidad</p>
    </div>

</div>

<!-- PROMOCIÓN -->
<div class="promo-home">
    <h2>🔥 20% OFF en Hoodies</h2>
    <p>Usa el código: <strong>BLACK20</strong></p>
</div>

<!-- TESTIMONIOS -->
<h2 class="seccion">Opiniones de clientes</h2>

<div class="testimonios">

<div class="testimonio">
<p>"La calidad es brutal, volvería a comprar sin pensarlo 🔥"</p>
<span>- Juan Pérez</span>
</div>

<div class="testimonio">
<p>"Llegó rápido y tal cual como en la foto, recomendado"</p>
<span>- Laura Gómez</span>
</div>

<div class="testimonio">
<p>"Muy buena atención y los precios están top"</p>
<span>- Andrés Ruiz</span>
</div>

</div>

<!-- FRASE -->
<div class="frase">
    <p>"No sigas tendencias. Créelas."</p>
</div>

<!-- BOTÓN SUBIR -->
<button onclick="window.scrollTo(0,0)" class="btn-top">
⬆
</button>

<!-- POPUP -->
<div id="popup" class="popup">
<p>🎁 10% OFF con código: SENA10</p>
<button onclick="cerrarPopup()">Cerrar</button>
</div>

<script>

// CONTADOR
function iniciarContador(){

let tiempo = 3600;

setInterval(()=>{

let minutos = Math.floor(tiempo / 60);
let segundos = tiempo % 60;

document.getElementById("tiempo").innerText =
minutos + "m " + segundos + "s";

tiempo--;

},1000);

}

iniciarContador();

// POPUP
function cerrarPopup(){
document.getElementById("popup").style.display = "none";
}

setTimeout(()=>{
document.getElementById("popup").style.display = "block";
},3000);

</script>

@endsection
// ==============================
// BUSCADOR DE PRODUCTOS
// ==============================

const buscador = document.getElementById("buscar");

if (buscador) {

buscador.addEventListener("keyup", function () {

const filtro = buscador.value.toLowerCase();
const productos = document.querySelectorAll(".producto");

productos.forEach(function (producto) {

const texto = producto.innerText.toLowerCase();

producto.style.display = texto.includes(filtro) ? "block" : "none";

});

});

}


// ==============================
// MODO OSCURO
// ==============================

function modoOscuro() {

document.body.classList.toggle("oscuro");

}


// ==============================
// CARRITO DE COMPRAS (PERSISTENTE)
// ==============================

function obtenerCarrito(){

return JSON.parse(localStorage.getItem("carrito")) || [];

}

function guardarCarrito(carrito){

localStorage.setItem("carrito", JSON.stringify(carrito));

}

function actualizarContador(){

let carrito = JSON.parse(localStorage.getItem("carrito")) || [];

let total = 0;

carrito.forEach(producto=>{
total += producto.cantidad;
});

let contador = document.getElementById("contador-carrito");

if(contador){
contador.innerText = total;
}

}

actualizarContador();

function agregarCarrito(nombre,precio){

let carrito = JSON.parse(localStorage.getItem("carrito")) || [];

let producto = carrito.find(p => p.nombre === nombre);

if(producto){

producto.cantidad++;

}else{

carrito.push({
nombre:nombre,
precio:precio,
cantidad:1
});

}

localStorage.setItem("carrito",JSON.stringify(carrito));

actualizarContador();

alert("🛒 "+nombre+" agregado al carrito");

}

window.agregarCarrito = agregarCarrito;

actualizarContador();


// ==============================
// FUERZA DE CONTRASEÑA
// ==============================

const password = document.getElementById("password");
const barra = document.getElementById("barra");
const mensaje = document.getElementById("mensaje");

if (password && barra && mensaje){

password.addEventListener("keyup",function(){

let valor = password.value;
let fuerza = 0;

if(valor.length >= 6) fuerza++;
if(/[A-Z]/.test(valor)) fuerza++;
if(/[0-9]/.test(valor)) fuerza++;
if(/[@$!%*?&]/.test(valor)) fuerza++;

if(fuerza === 1){

barra.style.width = "25%";
barra.style.background = "red";
mensaje.innerText = "Muy débil";

}

else if(fuerza === 2){

barra.style.width = "50%";
barra.style.background = "orange";
mensaje.innerText = "Débil";

}

else if(fuerza === 3){

barra.style.width = "75%";
barra.style.background = "yellowgreen";
mensaje.innerText = "Buena";

}

else if(fuerza >= 4){

barra.style.width = "100%";
barra.style.background = "green";
mensaje.innerText = "Contraseña fuerte";

}

});

}
function mostrarNotificacion(nombre){

let noti = document.getElementById("notificacion");

noti.innerText = "🛒 "+nombre+" agregado al carrito";

noti.classList.add("mostrar");

setTimeout(()=>{
noti.classList.remove("mostrar");
},2000);

}
function pagar(){

let carrito = JSON.parse(localStorage.getItem("carrito")) || [];

if(carrito.length === 0){

alert("Tu carrito está vacío");

return;

}

alert("✅ Compra realizada con éxito");

localStorage.removeItem("carrito");

location.reload();

}
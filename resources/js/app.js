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
// FUNCIONES BASE DEL CARRITO
// ==============================

function obtenerCarrito(){
return JSON.parse(localStorage.getItem("carrito")) || [];
}

function guardarCarrito(carrito){
localStorage.setItem("carrito", JSON.stringify(carrito));
}


// ==============================
// CONTADOR DEL CARRITO
// ==============================

function actualizarContador(){

let carrito = obtenerCarrito();
let total = 0;

carrito.forEach(producto=>{
total += producto.cantidad;
});

let contador = document.getElementById("contador-carrito");

if(contador){
contador.innerText = total;
}

}

// IMPORTANTE: se ejecuta cuando carga la página
document.addEventListener("DOMContentLoaded", actualizarContador);


// ==============================
// AGREGAR AL CARRITO
// ==============================

function agregarCarrito(nombre,precio,imagen){

let carrito = obtenerCarrito();

let producto = carrito.find(p => p.nombre === nombre);

if(producto){

producto.cantidad++;

}else{

carrito.push({
nombre:nombre,
precio:precio,
imagen:imagen,
cantidad:1
});

}

guardarCarrito(carrito);

actualizarContador();
mostrarNotificacion(nombre);

}

window.agregarCarrito = agregarCarrito;


// ==============================
// NOTIFICACIÓN BONITA
// ==============================

function mostrarNotificacion(nombre){

let noti = document.getElementById("notificacion");

// evita que rompa todo si no existe
if(!noti) return;

noti.innerText = "🛒 " + nombre + " agregado al carrito";

noti.classList.add("mostrar");

setTimeout(()=>{
noti.classList.remove("mostrar");
},2000);

}


// ==============================
// FUNCIÓN PAGAR
// ==============================

function pagar(){

let carrito = obtenerCarrito();

if(carrito.length === 0){
alert("Tu carrito está vacío");
return;
}

alert("✅ Compra realizada con éxito");

localStorage.removeItem("carrito");

actualizarContador();

location.reload();

}


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
function aplicarCupon(){

let codigo = document.getElementById("cupon")?.value;

if(!codigo) return;

if(codigo === "SENA10"){
localStorage.setItem("descuento",10);
alert("Cupón aplicado");
}else{
alert("Cupón inválido");
}

}
// ==============================
// CONTADOR DE OFERTA
// ==============================

function iniciarContador(){

let tiempo = 3600;

setInterval(()=>{

let minutos = Math.floor(tiempo / 60);
let segundos = tiempo % 60;

let elemento = document.getElementById("tiempo");

if(elemento){
elemento.innerText = minutos + "m " + segundos + "s";
}

tiempo--;

},1000);

}

// ==============================
// POPUP
// ==============================

function cerrarPopup(){

let popup = document.getElementById("popup");

if(popup){
popup.style.display = "none";
}

}

function mostrarPopup(){

let popup = document.getElementById("popup");

if(popup){
popup.style.display = "block";
}

}

// ==============================
// INICIO SEGURO
// ==============================

document.addEventListener("DOMContentLoaded", function(){

iniciarContador();

setTimeout(()=>{
mostrarPopup();
},3000);

});
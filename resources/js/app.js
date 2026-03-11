const buscador = document.getElementById("buscar");

if(buscador){

buscador.addEventListener("keyup", function(){

let filtro = buscador.value.toLowerCase();
let productos = document.querySelectorAll(".producto");

productos.forEach(function(producto){

let texto = producto.innerText.toLowerCase();

if(texto.includes(filtro)){
producto.style.display = "block";
}else{
producto.style.display = "none";
}

});

});

}
function modoOscuro(){

document.body.classList.toggle("oscuro");

}
let contador = 0;

function agregarCarrito(nombre){

contador++;

document.getElementById("contador").innerText = contador;

alert(nombre + " agregado al carrito");

}

window.agregarCarrito = agregarCarrito;
<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">
<title>Siete Punto Siete</title>

@vite(['resources/css/app.css', 'resources/js/app.js'])

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body>

<!-- NOTIFICACIÓN -->
<div id="notificacion" class="notificacion">
Producto agregado al carrito
</div>


<!-- NAVBAR -->
<div class="navbar">

<a href="/siete_punto_siete/public/">Inicio</a>

<a href="/siete_punto_siete/public/productos">Productos</a>

<a href="/siete_punto_siete/public/carrito">
<i class="fa-solid fa-cart-shopping"></i> 
Carrito (<span id="contador-carrito">0</span>)
</a>

<a href="/siete_punto_siete/public/dashboard">Dashboard</a>

<a href="/siete_punto_siete/public/login">Login</a>

<a href="/siete_punto_siete/public/registro">Registro</a>

</div>

<!-- CONTENIDO -->
<div class="container">

@yield('contenido')

</div>

</body>
</html>
<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">
<title>Siete Punto Siete</title>

@vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>

<button onclick="modoOscuro()" class="boton">Modo oscuro</button>

<div class="navbar">

<a href="/siete_punto_siete/public/">Inicio</a>
<a href="/siete_punto_siete/public/productos">Productos</a>
<a href="/siete_punto_siete/public/carrito">
Carrito (<span id="contador">0</span>)
</a>
<a href="/siete_punto_siete/public/dashboard">Dashboard</a>
<a href="/siete_punto_siete/public/login">Login</a>
<a href="/siete_punto_siete/public/registro">Registro</a>

</div>

<div class="container">

@yield('contenido')

</div>

</body>
</html>
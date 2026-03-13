@extends('layout')

@section('contenido')

<h1>Dashboard</h1>
<a href="/crear-producto" class="boton">
➕ Crear producto
</a>
<div class="stats">

<div class="card">
<h2>120</h2>
<p>Productos</p>
</div>

<div class="card">
<h2>35</h2>
<p>Ventas Hoy</p>
</div>

<div class="card">
<h2>15</h2>
<p>Usuarios</p>
</div>

<div class="card">
<h2>8</h2>
<p>En carrito</p>
</div>

</div>

@endsection
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<canvas id="ventasChart"></canvas>

<script>

const ctx = document.getElementById('ventasChart');

new Chart(ctx, {
type: 'bar',
data: {
labels: ['Lunes','Martes','Miércoles','Jueves','Viernes'],
datasets: [{
label: 'Ventas',
data: [12,19,8,15,10]
}]
}
});

</script>
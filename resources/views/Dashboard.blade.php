@extends('layout')

@section('contenido')

<h1 class="titulo-dashboard">Panel de Administración</h1>

<div class="estadisticas">

<div class="card-estadistica">
<h2>{{ count($productos) }}</h2>
<p>Productos</p>
</div>

<div class="card-estadistica">
<h2>35</h2>
<p>Ventas hoy</p>
</div>

<div class="card-estadistica">
<h2>15</h2>
<p>Usuarios</p>
</div>

<div class="card-estadistica">
<h2>$500.000</h2>
<p>Ingresos</p>
</div>

</div>

<a href="/crear-producto" class="boton">
➕ Crear producto
</a>

<br><br>

<h2>Lista de productos</h2>

<table class="tabla-productos">

<tr>
<th>ID</th>
<th>Nombre</th>
<th>Precio</th>
<th>Stock</th>
</tr>

@foreach($productos as $producto)

<tr>

<td>{{ $producto->id }}</td>
<td>{{ $producto->nombre }}</td>
<td>${{ $producto->precio }}</td>
<td>{{ $producto->stock }}</td>

</tr>

@endforeach

</table>

<br><br>

<div class="grafica-container">

<canvas id="ventasChart"></canvas>

</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>

const ctx = document.getElementById('ventasChart');

if(ctx){

new Chart(ctx, {

type: 'bar',

data: {

labels: ['Lunes','Martes','Miércoles','Jueves','Viernes'],

datasets: [{
label:'Ventas',
data:[12,19,8,15,10],
backgroundColor:'#111'
}]

},

options:{
plugins:{
legend:{display:false}
},
scales:{
y:{beginAtZero:true}
}
}

});

}

</script>

@endsection

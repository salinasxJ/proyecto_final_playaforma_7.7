<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{

public function index()
{

$productos = Producto::all();

return view('productos', compact('productos'));

}

public function crear()
{
return view('crear-producto');
}

public function guardar(Request $request)
{

Producto::create([
'nombre' => $request->nombre,
'descripcion' => $request->descripcion,
'precio' => $request->precio,
'stock' => $request->stock
]);

return redirect('/dashboard');

}

public function dashboard()
{

$productos = Producto::all();

return view('dashboard', compact('productos'));

}

}
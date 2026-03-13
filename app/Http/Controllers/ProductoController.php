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

public function create()
{
    return view('crear_producto');
}

public function store(Request $request)
{

Producto::create([
'nombre' => $request->nombre,
'descripcion' => $request->descripcion,
'precio' => $request->precio,
'imagen' => $request->imagen
]);

return redirect('/productos');

}

}
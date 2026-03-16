<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

Route::view('/', 'home');

Route::get('/productos', [ProductoController::class, 'index']);

Route::view('/carrito', 'carrito');

Route::get('/dashboard', [ProductoController::class, 'dashboard']);

Route::view('/login', 'login');
Route::view('/registro', 'registro');

Route::get('/crear-producto', [ProductoController::class, 'crear']);

Route::post('/guardar-producto', [ProductoController::class, 'guardar']);

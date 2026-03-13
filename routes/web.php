<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;

Route::view('/', 'home');
Route::view('/productos', 'productos');
Route::view('/carrito', 'carrito');
Route::view('/dashboard', 'dashboard');
Route::view('/login', 'login');
Route::view('/registro', 'registro');
Route::get('/productos', [ProductoController::class, 'index']);
Route::get('/crear-producto', [ProductoController::class, 'crear']);
Route::post('/guardar-producto', [ProductoController::class, 'guardar']);
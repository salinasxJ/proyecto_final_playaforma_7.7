<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/productos', [ProductController::class, 'index']);

Route::get('/carrito', [CartController::class, 'index']);
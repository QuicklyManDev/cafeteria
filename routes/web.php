<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

Route::get('/', function () {
    return view('home');
});

Route::get('/ordenarProductos', [ProductoController::class, 'getProductos']);

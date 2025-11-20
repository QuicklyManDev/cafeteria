<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/ordenarProductos',
[ProductoController::class,'getProductos']);

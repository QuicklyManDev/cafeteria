<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\PedidoController;

Route::get('/', function () {
    return view('home');
});

Route::get('/ordenarProductos', [ProductoController::class, 'getProductos']);

Route::get('/generarPedido',
  [PedidoController::class,'getOrdenado']);

Route::get('/agregarProducto/{id}',
  [PedidoController::class,'agregarProducto']);

Route::get('/ordenadoMas/{id}',
  [PedidoController::class,'masCantidad']);

Route::get('/ordenadoMenos/{id}',
  [PedidoController::class,'menosCantidad']);

Route::post('/grabarPedido',
  [PedidoController::class,'grabarPedido']);

Route::get('/administrarPedidos', [PedidoController::class, 'getPedidos']);

Route::delete('/eliminarPedido/{pedido}', [PedidoController::class, 'eliminarPedido']);
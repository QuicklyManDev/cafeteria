<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function agregarProducto{
        $ordenado = Ordenado::orderBy('nombre','asc')->get();
        return view('generarPedido', compact('ordenado'));
    }
}
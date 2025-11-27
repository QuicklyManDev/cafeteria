<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\Ordenado;
use App\Models\Producto;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function agregarProducto($id){
        $ordenado = new Ordenado();
        $producto = Producto::find($id);
        $ordenado->producto_id=$producto->id;
        $ordenado->nombre=$producto->nombre;
        $ordenado->precio=$producto->precio;
        $ordenado->imagen=$producto->imagen;
        $ordenado->cantidad=1;
        $ordenado->save();
        return redirect('/ordenarProductos');
    }

    public function getOrdenado(){
        $ordenado = Ordenado::orderBy('nombre','asc')->get();
        return view('generarPedido', compact('ordenado'));
    }

     public function masCantidad($id){
        $ordenado = Ordenado::find($id);
        $ordenado->cantidad += 1;
        $ordenado->save();
        return redirect('/generarPedido');
    }

     public function menosCantidad($id){
        $ordenado = Ordenado::find($id);
        $ordenado->cantidad -= 1;
        $ordenado->save();
        if ($ordenado->cantidad < 1){
            $ordenado->delete();
        }
        return redirect('/generarPedido');
    }

}
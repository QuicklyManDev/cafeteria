<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function getOrdenado(){
        $ordenado = Ordenado::orderBy('nombre','asc')->get();
        return view('generarPedido', compact('ordenado'));
    }

    public function agregarProducto($id){
        $ordenado = new Ordenado();
        $producto = Producto::find($oid);
        $ordenado->producto_id=$producto->id;
        $ordenado->nombre=$producto->nombre;
        $ordenado->precio=$producto->precio;
        $ordenado->imagen=$producto->imagen;
        $ordenado->cantidad=1;
        $ordenado->save();
        return redirect('/ordenarProductos');
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
        if ($ordenado->cantidad < 1){
            $ordenado->delete();
        }
        $ordenado->save();
        return redirect('/generarPedido');
    }

}
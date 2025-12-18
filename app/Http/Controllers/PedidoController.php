<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\Ordenado;
use App\Models\Producto;
use App\Models\Detalle;
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

    public function getPedidos(){
        $pedidos = Pedido::orderBy('id','asc')->get();
        return view('administrarPedidos', compact('pedidos'));
    }

    public function eliminarPedido(Pedido $pedido)
{
    $pedido->delete();
    return redirect('/administrarPedidos')->with('success', 'Pedido eliminado correctamente.');
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

        public function grabarPedido(Request $request){
        $pedido = new Pedido();
        $datos = $request->input();
        $pedido->nombre= $datos["nombre"];
        $pedido->origen= $datos["origen"];
        $pedido->fecha= now();
        $pedido->total= $datos["total"];
        $pedido->save();
          $ordenado = Ordenado::orderBy('nombre','asc')->get();
           foreach($ordenado as $ordenados){
              $detalle = new Detalle();
              $detalle->producto_id= $ordenados->id;
              $detalle->nombre= $ordenados->nombre;
              $detalle->precio= $ordenados->precio;
              $detalle->imagen= $ordenados->imagen;
              $detalle->cantidad= $ordenados->cantidad;
              $detalle->pedido_id= $pedido->id;
              $detalle->save();
           }
           foreach($ordenado as $ordenados){
               $ordenados->delete();
           }
        return redirect('/generarPedido');
    }

}
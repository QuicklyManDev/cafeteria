@extends('master')

@section('pestaña')
   <title>Lista de Pedidos</title>
@stop

@section('titulo')
 <div class="row">
  <h1 class="col-8">Pedidos de la Cafetería</h1>
  <a href="{{ url('/generarPedido') }}" class="btn btn-success col-3 align-self-start">Crear Nuevo Pedido</a>
 </div>
@stop

@section('contenido')
@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Origen</th>
                <th>Fecha</th>
                <th>Total</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($pedidos as $pedido)
                <tr>
                    <td>{{ $pedido->id }}</td>
                    <td>{{ $pedido->nombre }}</td>
                    <td>{{ $pedido->origen }}</td>
                    <td>{{ $pedido->fecha }}</td>
                    <td>${{ number_format($pedido->total, 2) }}</td>
                    <td>
                        <form action="{{ url('eliminarPedido/' . $pedido->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que quieres eliminar este pedido?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">No hay pedidos registrados.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
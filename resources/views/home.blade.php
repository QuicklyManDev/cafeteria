@extends('master')

@section('titulo', 'Cafe107')

@section('contenido')
<div class="text-center">
    <h1 class="mb-4">Bienvenidos al Cafe107</h1>
    <p class="lead">
        La cafeina es vida...
    </p>

    <img src="https://st2.depositphotos.com/2631505/5462/i/450/depositphotos_54626107-stock-photo-happy-businessman-holding-funny-huge.jpg" 
         class="img-fluid rounded mt-4" 
         alt="Cafetería escolar" 
         style="max-height: 400px; object-fit: cover;">

    <div class="mt-5">
        <a href="{{ url('/ordenarProductos') }}" class="btn btn-primary btn-lg me-3">Hacer Pedido</a>
        <a href="{{ url('/generarPedido') }}" class="btn btn-success btn-lg me-3">Ir al Carrito</a>
    </div>
</div>
@endsection

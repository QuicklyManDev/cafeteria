@extends('master')

@section('title', 'cafe107')

@section('content')
<div class="text-center">
    <h1 class="mb-4">Bienvenidos a la Cafe107 ☕</h1>
    <p class="lead">
        La cafeina es vida...
    </p>

    <img src="https://images.unsplash.com/photo-1509042239860-f550ce710b93?w=800" 
         class="img-fluid rounded mt-4" 
         alt="Cafetería escolar" 
         style="max-height: 400px; object-fit: cover;">

    <div class="mt-5">
        <a href="#" class="btn btn-primary btn-lg me-3">Hacer Pedido</a>
        <a href="#" class="btn btn-outline-secondary btn-lg">Ver Menú</a>
    </div>
</div>
@endsection

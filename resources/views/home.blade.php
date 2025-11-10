@extends('master')

@section('title', 'Inicio - Cafetería Escolar')

@section('content')
<div class="text-center">
    <h1 class="mb-4">Bienvenidos a la Cafetería Escolar ☕</h1>
    <p class="lead">
        Disfruta de nuestros deliciosos desayunos, bebidas calientes y snacks pensados especialmente para estudiantes y personal docente.
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

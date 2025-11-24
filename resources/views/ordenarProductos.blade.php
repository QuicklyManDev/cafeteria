@extends('master')

@section('pestaña')
   <title>Ordenar Productos</title>
@stop

@section('titulo')
  Ordenar Productos
@stop

@section('contenido')

<div class="table-responsive">
    <table class="table table-hover">
      <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Imagen</th>
            <th>Opciones</th>
        </tr>
      </thead>

      <tbody>
        @foreach($productos as $producto)
        <tr>
            <td>{{ $producto->id }}</td>
            <td>{{ $producto->nombre }}</td>
            <td>${{ $producto->precio }}</td>

            <td>
                <img src="{{ asset($producto->imagen) }}" 
                     alt="{{ $producto->nombre }}" 
                     style="width: 100px; border-radius: 8px;">
            </td>

            <td>
                <a href="{{ url('/agregarProducto/' . $producto->id) }}"
                    class="btn btn-primary btn-sm">Agregar</a>
            </td>
        </tr>
        @endforeach
      </tbody>

    </table>
</div>

@endsection

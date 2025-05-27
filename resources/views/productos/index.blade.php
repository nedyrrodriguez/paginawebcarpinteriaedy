@extends('layouts.app')

@section('contenido')
<h1 class="text-3xl font-bold mb-6 text-center">Lista de Productos</h1>

<!-- Botón Nuevo Producto -->
<div class="flex justify-end mb-6 mr-5">
    <a href="{{ route('productos.create') }}" class="btn btn-outline">Nuevo Producto</a>
</div>

<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
    @foreach ($producto1s as $producto)
        <div class="card bg-[#13087F] shadow-md text-white">
            <figure>
                <img src="https://picsum.photos/id/{{ $producto->id }}/300/200" alt="{{ $producto->nombre }}" />
            </figure>
            <div class="card-body">
                <h2 class="card-title">{{ $producto->nombre }}</h2>
                <p>{{ $producto->descripcion }}</p>
                <p class="font-bold text-lg">${{ number_format($producto->precio, 0, ',', '.') }}</p>
                <div class="card-actions justify-end">
                    <button class="btn btn-primary">Comprar ahora</button>

                    <!-- Botón Editar -->
                    <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-outline btn-xs">Editar</a>

                    <!-- Botón Eliminar -->
                    <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline btn-xs">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection









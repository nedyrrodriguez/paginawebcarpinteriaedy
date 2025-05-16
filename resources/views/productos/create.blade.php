@extends('layouts.app')

@section('content')
<h1 class="text-3xl font-bold mb-6 text-center">Crear Nuevo Producto</h1>

<div class="max-w-3xl mx-auto bg-white p-6 rounded-xl shadow-md">
    <form action="{{ route('productos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Nombre -->
        <div class="mb-4">
            <label for="nombre" class="block text-gray-700 font-semibold mb-2">Nombre del producto:</label>
            <input type="text" name="nombre" id="nombre" class="input input-bordered w-full" required>
        </div>

        <!-- Imagen (solo campo de subida visual, sin lógica aún) -->
        <div class="mb-4">
            <label for="imagen" class="block text-gray-700 font-semibold mb-2">Imagen:</label>
            <input type="file" name="imagen" id="imagen" class="file-input file-input-bordered w-full" accept="image/*">
        </div>

        <!-- Descripción -->
        <div class="mb-4">
            <label for="descripcion" class="block text-gray-700 font-semibold mb-2">Descripción:</label>
            <textarea name="descripcion" id="descripcion" rows="3" class="textarea textarea-bordered w-full"></textarea>
        </div>

        <!-- Precio -->
        <div class="mb-4">
            <label for="precio" class="block text-gray-700 font-semibold mb-2">Precio:</label>
            <input type="number" name="precio" id="precio" class="input input-bordered w-full" min="100" required>
        </div>

        <!-- Cantidad -->
        <div class="mb-4">
            <label for="cantidad" class="block text-gray-700 font-semibold mb-2">Cantidad:</label>
            <input type="number" name="cantidad" id="cantidad" class="input input-bordered w-full" min="1" required>
        </div>

        <!-- Cliente ID -->
        <div class="mb-6">
            <label for="cliente_id" class="block text-gray-700 font-semibold mb-2">ID del Cliente:</label>
            <input type="number" name="cliente_id" id="cliente_id" class="input input-bordered w-full" required>
        </div>

        <!-- Botones -->
        <div class="flex justify-between">
            <a href="{{ route('productos.index') }}" class="btn btn-outline">Cancelar</a>
            <button type="submit" class="btn btn-primary">Crear Producto</button>
        </div>
    </form>
</div>
@endsection


@extends('layouts.app')

@section('cabecera') {{-- Sin título pequeño --}}

@section('contenido')

    <!-- Galería de imágenes: 3 filas, 2 imágenes centradas por fila, separadas y alineadas -->
    <div class="max-w-5xl mx-auto space-y-10">

        <div class="flex justify-center gap-16">
            <img src="{{ asset('images/cocina.jpg') }}" alt="Imagen Cocina" class="w-64 h-64 object-cover rounded-lg shadow-lg">
            <img src="{{ asset('images/puertas.jpg') }}" alt="Imagen Puertas" class="w-64 h-64 object-cover rounded-lg shadow-lg">
        </div>

        <div class="flex justify-center gap-16">
            <img src="{{ asset('images/closet.jpg') }}" alt="Imagen Closet" class="w-64 h-64 object-cover rounded-lg shadow-lg">
            <img src="{{ asset('images/isla.jpg') }}" alt="Imagen Isla" class="w-64 h-64 object-cover rounded-lg shadow-lg">
        </div>

        <div class="flex justify-center gap-16">
            <img src="{{ asset('images/cociplo.jpg') }}" alt="Imagen Cociplo" class="w-64 h-64 object-cover rounded-lg shadow-lg">
            <img src="{{ asset('images/cloespejo.jpg') }}" alt="Imagen Cloespejo" class="w-64 h-64 object-cover rounded-lg shadow-lg">
        </div>

    </div>

    <!-- Barra con categorías -->
    <div class="max-w-5xl mx-auto mt-12 flex justify-center space-x-8 text-white text-lg font-semibold">
        <span class="cursor-pointer hover:text-indigo-300 transition">Empresa</span>
        <span class="cursor-default select-none">|</span>
        <span class="cursor-pointer hover:text-indigo-300 transition">Cocinas</span>
        <span class="cursor-default select-none">|</span>
        <span class="cursor-pointer hover:text-indigo-300 transition">Closets</span>
        <span class="cursor-default select-none">|</span>
        <span class="cursor-pointer hover:text-indigo-300 transition">Otros Muebles</span>
        <span class="cursor-default select-none">|</span>
        <span class="cursor-pointer hover:text-indigo-300 transition">Catálogo de Colores</span>
    </div>

    <!-- Botón llamativo con texto más grande y destacado -->
    <div class="text-center mt-14">
        <a href="#" class="inline-block border-4 border-gray-300 px-12 py-6 text-3xl font-extrabold rounded-lg hover:bg-gray-200 hover:text-black transition shadow-lg">
            Trabajos sobre medida de acuerdo a los espacios de tu hogar
        </a>
    </div>

@endsection

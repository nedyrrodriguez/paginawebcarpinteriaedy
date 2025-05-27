@extends('layouts.app')

@section('contenido')
<div class="max-w-3xl mx-auto py-12 px-6 bg-blue-900 rounded-3xl shadow-2xl text-white">
    <h1 class="text-4xl font-extrabold text-center mb-10 tracking-wide drop-shadow-lg">
        Contáctanos
    </h1>

    <!-- Video de YouTube -->
    <div class="mb-10 flex justify-center shadow-lg rounded-xl overflow-hidden">
        <iframe width="560" height="315"
            src="https://www.youtube.com/embed/hGbftv-uo3I"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen
            class="rounded-xl"
        ></iframe>
    </div>

    <!-- Redes sociales -->
    <div class="text-center mb-10">
        <p class="text-xl font-semibold mb-5 drop-shadow-md">
            Síguenos en nuestras redes:
        </p>
        <div class="flex justify-center space-x-10">
            <a href="https://www.youtube.com/@Lascuriosidadesdeedy" target="_blank" 
                class="text-red-500 hover:text-red-400 font-bold text-lg transition-colors duration-300">
                YouTube
            </a>
            <a href="https://www.facebook.com/share/1AjF4Nzxst/" target="_blank" 
                class="text-blue-500 hover:text-blue-400 font-bold text-lg transition-colors duration-300">
                Facebook
            </a>
        </div>
    </div>

    <!-- Correo de contacto -->
    <div class="text-center">
        <p class="text-lg font-medium drop-shadow-sm">
            Correo: 
            <a href="mailto:edyerg12@hotmail.com" class="text-indigo-400 hover:text-indigo-300 underline transition-colors duration-300">
                edyerg12@hotmail.com
            </a>
        </p>
    </div>
</div>
@endsection



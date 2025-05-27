@extends('layouts.app')

@section('contenido')
<div class="min-h-screen flex items-center justify-center bg-blue-900 px-4">
  <div class="max-w-4xl w-full bg-blue-800 rounded-xl shadow-2xl p-10 flex flex-col lg:flex-row gap-10">
    
    <!-- Texto de bienvenida -->
    <div class="text-white flex-1 flex flex-col justify-center">
      <h1 class="text-5xl font-extrabold mb-6">¡Inicia sesión ahora!</h1>
      <p class="text-lg leading-relaxed">
        Bienvenido a <span class="font-semibold">Las curiosidades de Edy</span>, tu espacio confiable para comprar muebles y accesorios de carpintería de alta calidad. Por favor, ingresa con tu correo y contraseña para acceder a tu cuenta.
      </p>
    </div>

    <!-- Formulario -->
    <div class="bg-blue-700 rounded-lg shadow-xl p-8 w-full max-w-md">
      <form method="POST" action="{{ route('login') }}" class="space-y-6" novalidate>
        @csrf
        
        <div class="form-control">
          <label class="label text-white font-semibold" for="email">Correo Electrónico</label>
          <input
            id="email"
            type="email"
            name="email"
            class="input input-bordered input-md bg-blue-900 text-white placeholder-blue-300 border-blue-500 focus:border-blue-400 focus:ring focus:ring-blue-500 focus:ring-opacity-50 w-full"
            placeholder="Introduce tu correo electrónico"
            required
            autocomplete="email"
            autofocus
          />
          @error('email')
            <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>

        <div class="form-control">
          <label class="label text-white font-semibold" for="password">Contraseña</label>
          <input
            id="password"
            type="password"
            name="password"
            class="input input-bordered input-md bg-blue-900 text-white placeholder-blue-300 border-blue-500 focus:border-blue-400 focus:ring focus:ring-blue-500 focus:ring-opacity-50 w-full"
            placeholder="Introduce tu contraseña"
            required
            autocomplete="current-password"
          />
          @error('password')
            <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>

        <div class="mt-1 text-right">
          <a href="{{ route('password.request') }}" class="link link-hover text-sm text-blue-300 hover:text-blue-100">
            ¿Olvidaste tu contraseña?
          </a>
        </div>

        <div>
          <button
            type="submit"
            class="btn btn-primary w-full bg-blue-600 hover:bg-blue-700 border-none text-white font-bold text-lg transition"
          >
            Ingresar
          </button>
        </div>
      </form>

      <div class="mt-6 text-center text-blue-300 text-sm">
        ¿No tienes una cuenta?
        <a href="{{ route('register') }}" class="link link-primary font-semibold hover:text-white">
          Regístrate aquí
        </a>
      </div>
    </div>
  </div>
</div>
@endsection



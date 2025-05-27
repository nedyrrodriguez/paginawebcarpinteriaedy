@extends('layouts.app')

@section('contenido')
<div class="min-h-screen flex items-center justify-center bg-blue-900 px-4">
  <div class="max-w-2xl w-full bg-blue-800 rounded-xl shadow-2xl p-10">

    <h1 class="text-4xl font-extrabold text-white mb-6 text-center">Recuperar contraseña</h1>

    <p class="text-blue-300 mb-4 text-center">
      Ingresa tu correo electrónico y te enviaremos un enlace para restablecer tu contraseña.
    </p>

    <form method="POST" action="{{ route('password.email') }}" class="space-y-6" novalidate>
      @csrf

      <div class="form-control">
        <label for="email" class="label text-white font-semibold">Correo Electrónico</label>
        <input id="email" name="email" type="email" required autocomplete="email"
          class="input input-bordered input-md bg-blue-900 text-white placeholder-blue-300 border-blue-500
          focus:border-blue-400 focus:ring focus:ring-blue-500 focus:ring-opacity-50 w-full"
          placeholder="Introduce tu correo electrónico" />
        @error('email')
          <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div>
        <button type="submit"
          class="btn btn-primary w-full bg-blue-600 hover:bg-blue-700 border-none text-white font-bold text-lg transition">
          Enviar enlace de recuperación
        </button>
      </div>
    </form>

    <div class="mt-6 text-center text-blue-300 text-sm">
      ¿Recuerdas tu contraseña?
      <a href="{{ route('login') }}" class="link link-primary font-semibold hover:text-white">
        Inicia sesión aquí
      </a>
    </div>
  </div>
</div>
@endsection

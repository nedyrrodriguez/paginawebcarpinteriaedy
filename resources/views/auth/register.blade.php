@extends('layouts.app')

@section('contenido')
<div class="min-h-screen flex items-center justify-center bg-blue-900 px-4">
  <div class="max-w-4xl w-full bg-blue-800 rounded-xl shadow-2xl p-10 flex flex-col gap-10">

    <h1 class="text-5xl font-extrabold text-white mb-6 text-center">¡Regístrate ahora!</h1>

    <form method="POST" action="{{ route('register') }}" class="space-y-6" novalidate>
      @csrf

      <div class="form-control">
        <label for="name" class="label text-white font-semibold">Nombre completo</label>
        <input id="name" name="name" type="text" required autocomplete="name" autofocus
          class="input input-bordered input-md bg-blue-900 text-white placeholder-blue-300 border-blue-500
          focus:border-blue-400 focus:ring focus:ring-blue-500 focus:ring-opacity-50 w-full"
          placeholder="Introduce tu nombre completo" />
        @error('name')
          <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

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

      <div class="form-control">
        <label for="password" class="label text-white font-semibold">Contraseña</label>
        <input id="password" name="password" type="password" required autocomplete="new-password"
          class="input input-bordered input-md bg-blue-900 text-white placeholder-blue-300 border-blue-500
          focus:border-blue-400 focus:ring focus:ring-blue-500 focus:ring-opacity-50 w-full"
          placeholder="Introduce tu contraseña" />
        @error('password')
          <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div class="form-control">
        <label for="password_confirmation" class="label text-white font-semibold">Confirmar contraseña</label>
        <input id="password_confirmation" name="password_confirmation" type="password" required
          autocomplete="new-password"
          class="input input-bordered input-md bg-blue-900 text-white placeholder-blue-300 border-blue-500
          focus:border-blue-400 focus:ring focus:ring-blue-500 focus:ring-opacity-50 w-full"
          placeholder="Confirma tu contraseña" />
      </div>

      <div>
        <button type="submit"
          class="btn btn-primary w-full bg-blue-600 hover:bg-blue-700 border-none text-white font-bold text-lg transition">
          Registrarme
        </button>
      </div>
    </form>

    <div class="mt-6 text-center text-blue-300 text-sm">
      ¿Ya tienes una cuenta?
      <a href="{{ route('login') }}" class="link link-primary font-semibold hover:text-white">
        Inicia sesión aquí
      </a>
    </div>
  </div>
</div>
@endsection

@extends('layouts.app')

@section('titulo', 'Inicio de sesión')

@section('contenido')
<div class="hero bg-base-200 min-h-screen">
  <div class="hero-content flex-col lg:flex-row-reverse">
    <div class="text-center lg:text-left">
      <h1 class="text-5xl font-bold">¡Inicia sesión ahora!</h1>
      <p class="py-6">
        Bienvenido a Las curiosidades de Edy, tu espacio confiable para comprar muebles y accesorios de carpintería de alta calidad. Por favor, ingresa con tu correo y contraseña para acceder a tu cuenta.
      </p>
    </div>
    <div class="card bg-base-100 w-full max-w-sm shrink-0 shadow-2xl">
      <div class="card-body">
        <fieldset class="fieldset">
          <label class="label">Correo Electrónico</label>
          <input type="email" class="input" placeholder="Correo Electrónico" />
          <label class="label">Contraseña</label>
          <input type="password" class="input" placeholder="Contraseña" />
          <div><a class="link link-hover">¿Olvidaste tu contraseña?</a></div>
          <button class="btn btn-neutral mt-4">Ingresar</button>
        </fieldset>
      </div>
    </div>
  </div>
</div>
@endsection

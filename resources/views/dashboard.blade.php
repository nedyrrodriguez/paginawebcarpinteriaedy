@extends('layouts.app')

@section('cabecera', 'Dashboard')

@section('content')
<div class="max-w-4xl mx-auto p-8 bg-white rounded-lg shadow-md mt-10">

    <h1 class="text-4xl font-bold text-blue-900 mb-6 text-center">Bienvenido, {{ Auth::user()->name }}</h1>

    <p class="text-gray-700 text-center mb-8">
        Aquí puedes actualizar la información de tu perfil y cambiar tu contraseña.
    </p>

    <div class="bg-gray-100 p-6 rounded-lg shadow-inner">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Perfil de usuario</h2>

        <form method="POST" action="{{ route('profile.update') }}" class="space-y-6">
            @csrf
            @method('PUT')

            <div>
                <label for="name" class="block text-gray-700 font-semibold mb-2">Nombre:</label>
                <input type="text" id="name" name="name" value="{{ old('name', Auth::user()->name) }}" class="w-full border border-gray-300 p-3 rounded focus:outline-none focus:ring-2 focus:ring-blue-600" required>
                @error('name')
                    <p class="text-red-600 mt-1 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="email" class="block text-gray-700 font-semibold mb-2">Correo electrónico:</label>
                <input type="email" id="email" name="email" value="{{ old('email', Auth::user()->email) }}" class="w-full border border-gray-300 p-3 rounded focus:outline-none focus:ring-2 focus:ring-blue-600" required>
                @error('email')
                    <p class="text-red-600 mt-1 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="password" class="block text-gray-700 font-semibold mb-2">Nueva contraseña (opcional):</label>
                <input type="password" id="password" name="password" placeholder="Deja en blanco para no cambiar" class="w-full border border-gray-300 p-3 rounded focus:outline-none focus:ring-2 focus:ring-blue-600">
                @error('password')
                    <p class="text-red-600 mt-1 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="password_confirmation" class="block text-gray-700 font-semibold mb-2">Confirmar nueva contraseña:</label>
                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirmar contraseña" class="w-full border border-gray-300 p-3 rounded focus:outline-none focus:ring-2 focus:ring-blue-600">
            </div>

            <button type="submit" class="bg-blue-700 text-white px-6 py-3 rounded hover:bg-blue-900 transition duration-300 font-semibold">
                Actualizar Perfil
            </button>
        </form>
    </div>
</div>
@endsection

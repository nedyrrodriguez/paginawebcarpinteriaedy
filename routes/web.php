<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Producto1Controller;


// Ruta principal (página de bienvenida)
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Ruta para el dashboard, protegida con autenticación y verificación
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Grupo de rutas protegidas para perfil
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Ruta GET para mostrar la vista del formulario de contacto
Route::get('/contacto', function () {
    return view('contacto'); // Ahora busca resources/views/profile/contacto.blade.php
})->name('contacto');

// Ruta POST para procesar el envío del formulario de contacto
Route::post('/contacto', function (Request $request) {
    $request->validate([
        'nombre' => 'required|string|max:100',
        'email' => 'required|email',
        'mensaje' => 'required|string|max:1000',
    ]);

    // Aquí puedes agregar lógica para guardar o enviar el mensaje por correo si lo deseas.

    return back()->with('success', '¡Tu mensaje fue enviado correctamente!');
})->name('contacto.enviar');

Route::resource('productos', Producto1Controller::class);

// NUEVA RUTA AGREGADA
Route::get('/principal', function () {
    return view('principal');  // Asegúrate que la vista principal.blade.php esté en resources/views/
});

// Incluye las rutas de autenticación
require __DIR__.'/auth.php';

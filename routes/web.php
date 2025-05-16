<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Producto1Controller;
use App\Models\Producto1;

Route::get('/', function () {
     $productos = Producto1::all();
    return view('welcome', compact('productos'));

});

// Ruta con todos los métodos CRUD para productos
Route::resource('productos', Producto1Controller::class);

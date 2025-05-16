<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\ClienteController;
use App\Http\Controllers\Api\V1\CotizacionController;
use App\Http\Controllers\Api\V1\Producto1Controller;


// Rutas de clientes
Route::apiResource('v1/clientes', ClienteController::class);

// Rutas de cotizaciones
Route::apiResource('v1/cotizaciones', CotizacionController::class);

// Rutas de productos
Route::apiResource('v1/producto1s', Producto1Controller::class);

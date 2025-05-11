<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\ClienteController;
use App\Http\Controllers\Api\V1\CotizacionController;

// Rutas automáticas para CRUD usando apiResource 
Route::apiResource('v1/clientes', ClienteController::class);
Route::apiResource('v1/cotizaciones', CotizacionController::class);
Route::apiResource('v1/producto1s',App\Http\Controllers\Api\v1\Producto1Controller::class);

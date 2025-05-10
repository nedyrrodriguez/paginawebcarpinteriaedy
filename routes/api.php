<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Rutas automáticas para CRUD usando apiResource
Route::apiResource('v1/producto1s',App\Http\Controllers\Api\v1\Producto1Controller::class);

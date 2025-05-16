<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Cotizacion;
use Illuminate\Http\Request;

class CotizacionController extends Controller

{
    // Obtener todas las cotizaciones
    public function index()
    {
        return Cotizacion::all();  // Devuelve todas las cotizaciones
    }

    // Crear una nueva cotización
    public function store(Request $request)
    {
        // Validación de los datos enviados
        $request->validate([
            'cliente_id' => 'required|exists:clientes,id',  // Verificar que el cliente exista
            'producto_id' => 'required|exists:productos,id',  // Verificar que el producto exista
            'precio_total' => 'required|numeric',  // Verificar que el precio sea numérico
        ]);

        // Crear la cotización con los datos validados
        $cotizacion = Cotizacion::create($request->all());

        // Responder con la cotización creada
        return response()->json($cotizacion, 201);
    }

    // Obtener una cotización específica por ID
    public function show($id)
    {
        $cotizacion = Cotizacion::findOrFail($id);
        return response()->json($cotizacion);
    }

    // Actualizar los datos de una cotización
    public function update(Request $request, $id)
    {
        $cotizacion = Cotizacion::findOrFail($id);
        $cotizacion->update($request->all());
        return response()->json($cotizacion);
    }

    // Eliminar una cotización
    public function destroy($id)
    {
        $cotizacion = Cotizacion::findOrFail($id);
        $cotizacion->delete();
        return response()->json(null, 204);
    }
}
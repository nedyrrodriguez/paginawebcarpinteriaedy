<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cotizacion;
use Illuminate\Http\Request;

class CotizacionController extends Controller
{
    /// Obtener todas las cotizaciones
    public function index()
    {
        return Cotizacion::all();  // Devuelve todas las cotizaciones
    }

    // Crear una nueva cotización
    public function store(Request $request)
    {
        // Validamos los datos antes de guardar
        $request->validate([
            'cliente_id' => 'required|exists:clientes,id',  // Aseguramos que el cliente exista
            'producto' => 'required|string',
            'cantidad' => 'required|integer|min:1',
            'precio_estimado' => 'required|numeric|min:0',
        ]);

        // Creamos la cotización con los datos validados
        $cotizacion = Cotizacion::create($request->all());

        // Respondemos con la cotización creada
        return response()->json($cotizacion, 201);
    }

    // Obtener una cotización específica por ID
    public function show($id)
    {
        $cotizacion = Cotizacion::findOrFail($id);  // Busca la cotización por ID
        return response()->json($cotizacion);       // Devuelve la cotización encontrada
    }

    // Actualizar una cotización
    public function update(Request $request, $id)
    {
        $cotizacion = Cotizacion::findOrFail($id);  // Busca la cotización por ID
        $cotizacion->update($request->all());       // Actualiza los datos de la cotización
        return response()->json($cotizacion);       // Devuelve la cotización actualizada
    }

    // Eliminar una cotización
    public function destroy($id)
    {
        $cotizacion = Cotizacion::findOrFail($id);  // Busca la cotización por ID
        $cotizacion->delete();                      // Elimina la cotización
        return response()->json(null, 204);         // Responde con código 204 (sin contenido)
    }
}

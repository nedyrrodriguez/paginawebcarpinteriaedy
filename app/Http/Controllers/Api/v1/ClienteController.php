<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    // Obtener todos los clientes
    public function index()
    {
        return Cliente::all();  // Devuelve todos los registros de clientes
    }

    // Crear un nuevo cliente
    public function store(Request $request)
    {
        // Validación de los datos enviados
        $request->validate([
            'nombre' => 'required|string',
            'correo' => 'required|email|unique:clientes',
            'telefono' => 'required|string',
        ]);

        // Crear el cliente con los datos validados
        $cliente = Cliente::create($request->all());

        // Responder con el cliente creado
        return response()->json($cliente, 201);
    }

    // Obtener un cliente específico por ID
    public function show($id)
    {
        $cliente = Cliente::findOrFail($id);  // Buscar el cliente por ID
        return response()->json($cliente);    // Devolver el cliente encontrado
    }

    // Actualizar los datos de un cliente
    public function update(Request $request, $id)
    {
        $cliente = Cliente::findOrFail($id);  // Buscar el cliente por ID
        $cliente->update($request->all());    // Actualizar los datos del cliente
        return response()->json($cliente);    // Devolver el cliente actualizado
    }

    // Eliminar un cliente
    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);  // Buscar el cliente por ID
        $cliente->delete();                   // Eliminar el cliente
        return response()->json(null, 204);    // Responder con código 204 (sin contenido)
    }
}

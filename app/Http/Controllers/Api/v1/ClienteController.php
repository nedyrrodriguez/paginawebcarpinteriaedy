<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    //Mostrar todos los clientes
   // Obtener todos los clientes
    public function index()
    {
        return Cliente::all();  // Devuelve todos los registros de clientes
    }

    // Crear un nuevo cliente
    public function store(Request $request)
    {
        // Validamos los datos antes de guardar
        $request->validate([
            'nombre' => 'required|string',
            'correo' => 'required|email|unique:clientes',
        ]);

        // Creamos el cliente con los datos validados
        $cliente = Cliente::create($request->all());

        // Respondemos con el cliente creado
        return response()->json($cliente, 201);
    }

    // Obtener un cliente específico por ID
    public function show($id)
    {
        $cliente = Cliente::findOrFail($id);  // Busca el cliente por ID
        return response()->json($cliente);    // Devuelve el cliente encontrado
    }

    // Actualizar los datos de un cliente
    public function update(Request $request, $id)
    {
        $cliente = Cliente::findOrFail($id);  // Busca el cliente por ID
        $cliente->update($request->all());    // Actualiza los datos del cliente
        return response()->json($cliente);    // Devuelve el cliente actualizado
    }

    // Eliminar un cliente
    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);  // Busca el cliente por ID
        $cliente->delete();                   // Elimina el cliente
        return response()->json(null, 204);    // Responde con código 204 (sin contenido)
    }
}

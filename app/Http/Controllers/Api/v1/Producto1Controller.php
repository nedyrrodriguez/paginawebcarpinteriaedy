<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Producto1;
use Illuminate\Http\Request;

class Producto1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Creando funcionalidad para el método index
        return response()->json(Producto1::all(), 200); //mostrar todos los productos creados
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //para saber que se va a almacenar
        $datos = $request->validate([
            'nombre'=>['required','string','max:100'],
            'descripcion'=>['nullable','string','max:250'],
            'precio'=>['required','integer','min:100'],
            'cantidad'=>['required','integer','min:1'],
        ]);
        //guardar validacion de datos en DB
        $producto=Producto1::create($datos);
        //Respuesta al usuario 
        return response()->json([
        'success'=>true,
        'message'=>'Su producto fue creado con exito'
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto1 $producto1)
    {
        //responder al usuario
        return response()->json(Producto1::all(), 200);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto1 $producto1)
    {
        //validación para actualizar los datos
        $datos = $request->validate([
            'nombre'=>['required','string','max:100'],
            'descripcion'=>['nullable','string','max:250'],
            'precio'=>['required','integer','min:100'],
            'cantidad'=>['required','integer','min:1'],
        ]);
        // Actualizar los datos en la instancia del producto
        $producto1->update($datos);  // Aquí estamos utilizando la instancia ya obtenida
        

        //Respuesta al usuario 
        return response()->json([
        'success'=>true,
        'message'=>'Su producto fue actualizado con exito'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto1 $producto1)
    {
        //Esto es para eliminar el producto
        $producto1->delete();

        //Respuesta al usuario
        return response()->json([
            'success'=>true,
            'message'=>'El producto fue eliminado con exito',
        ],200);  
    }
}

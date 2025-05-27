<?php

namespace App\Http\Controllers;

use App\Models\Producto1;
use Illuminate\Http\Request;

class Producto1Controller extends Controller
{
    /**
     * Para visualizar los productos
     */
    public function index()
    {
        //
        $producto1s = Producto1::all();
        return view('productos.index', compact('producto1s'));
    }

   // Método para mostrar el formulario de creación
    public function create()
    {
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
        'nombre' => 'required|string|max:255',
        'descripcion' => 'required|string',
        'precio' => 'required|numeric',
    ]);

    Producto1::create($validated);

    return redirect()->route('productos.index')->with('success', 'Producto creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto1 $producto1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto1 $producto1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto1 $producto1)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto1 $producto1)
    {
        $producto1->delete();

    return redirect()->route('productos.index')->with('success', 'Producto eliminado');
    }
}

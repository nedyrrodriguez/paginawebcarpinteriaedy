<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto1 extends Model

    /** @use HasFactory<\Database\Factories\Producto1Factory> */
   {
    use HasFactory;
    // Los campos que pueden ser asignados masivamente
    protected $fillable = ['nombre','descripcion','precio','cantidad','cliente_id'];

    // Relación con el cliente: un producto1 pertenece a un cliente
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
    // Relación con cotizaciones: un producto1 puede estar en muchas cotizaciones
    public function cotizaciones()
    {
        return $this->hasMany(Cotizacion::class);
}
   }
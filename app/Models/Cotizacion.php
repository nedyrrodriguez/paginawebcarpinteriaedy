<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cotizacion extends Model
{
    use HasFactory;

    // Los campos que pueden ser asignados masivamente
    protected $fillable = ['cliente_id', 'producto_id', 'precio_total'];

    // Relación con el cliente: una cotización pertenece a un cliente
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    // Relación con el producto: una cotización pertenece a un producto
    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    // Los campos que pueden ser asignados masivamente
    protected $fillable = ['nombre','correo','telefono'];

    // Relación con productos: un cliente puede tener muchos productos
    public function productos()
    {
        return $this->hasMany(Producto1::class);
    }

    // Relación con cotizaciones: un cliente puede tener muchas cotizaciones
    public function cotizaciones()
    {
        return $this->hasMany(Cotizacion::class);
    }
}

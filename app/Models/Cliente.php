<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';  // Asegúrate de que este sea el nombre correcto de la tabla
    protected $fillable = ['nombre', 'telefono', 'correo']; // según las columnas
    // Si necesitas relaciones, agrégalas aquí (por ejemplo, si un cliente tiene cotizaciones)
    public function cotizaciones()
   { return $this->hasMany(Cotizacion::class, 'cliente_id');
}
}

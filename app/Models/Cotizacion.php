<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cotizacion extends Model
{
    //nombre correcto de la clase
    protected $table = 'cotizaciones'; 
    // Especifica los campos que se pueden asignar masivamente
    protected $fillable = ['cliente_id', 'producto_id', 'fecha', 'precio'];
}

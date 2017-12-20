<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cotizacion extends Model
{
    protected $table = "cotizaciones";
    protected $fillable = ['moneda','cotizacion_actual','cotizacion_anterior'];
}

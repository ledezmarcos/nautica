<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proveedores extends Model
{
    protected $table = "proveedores";
    protected $fillable = ['nombre','contacto','direccion'];

    public function cab_compra()
    {
    	return $this->hasMany('App\cab_compra');
    }
}

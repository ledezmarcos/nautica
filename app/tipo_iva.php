<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipo_iva extends Model
{
    protected $table = "tipo_iva";
    protected $fillable = ['nombre'];

    public function cab_compra()
    {
    	return $this->hasMany('App\cab_compra');
    }
}

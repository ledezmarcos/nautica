<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipo_pago extends Model
{
    protected $table = "tipo_pago";
    protected $fillable = ['nombre'];

    public function cab_compra()
    {
    	return $this->hasMany('App\cab_compra');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cab_venta extends Model
{
    protected $table = "cab_venta";
    protected $fillable = ['tipo_pago_id','monto','tipo_iva_id', 'cliente_id', 'fecha'];

    public function tipo_pago()
    {
    	return $this->belongsTo('App\tipo_pago');
    }

    public function tipo_iva()
    {
    	return $this->belongsTo('App\tipo_iva');
    }

    public function clientes()
    {
    	return $this->belongsTo('App\clientes');
    }

    public function det_venta()
    {
        return $this->hasMany('App\det_venta');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cab_compra extends Model
{
    protected $table = "cab_compra";
    protected $fillable = ['tipo_pago_id','monto','tipo_iva_id', 'factura_id', 'proveedor_id', 'fecha'];

    public function tipo_pago()
    {
    	return $this->belongsTo('App\tipo_pago');
    }

    public function tipo_iva()
    {
    	return $this->belongsTo('App\tipo_iva');
    }

    public function factura()
    {
    	return $this->belongsTo('App\factura');
    }

    public function proveedor()
    {
    	return $this->belongsTo('App\proveedores');
    }

    public function det_compra()
    {
        return $this->hasMany('App\det_compra');
    }
}

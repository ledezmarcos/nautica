<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class det_venta extends Model
{
    protected $table = "det_venta";
    protected $fillable = ['cab_venta_id','producto_id','cantidad'];

    public function cab_venta()
    {
    	return $this->belongsTo('App\cab_venta');
    }

    public function productos()
    {
    	return $this->belongsTo('App\productos');
    }
}

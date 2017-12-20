<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class det_compra extends Model
{
    protected $table = "det_compra";
    protected $fillable = ['cab_compra_id','producto_id','cantidad'];

    public function cab_compra()
    {
    	return $this->belongsTo('App\cab_compra');
    }

    public function productos()
    {
    	return $this->belongsTo('App\productos');
    }
}

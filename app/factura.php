<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class factura extends Model
{
    protected $table = "factura";
    protected $fillable = ['numero'];

    public function cab_compra()
    {
    	return $this->hasMany('App\cab_compra');
    }
}

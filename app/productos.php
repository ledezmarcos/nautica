<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    protected $table = "productos";
    protected $fillable = ['nombre','precio','stock','tipo','marca','stock_minimo','codigo'];

    public function det_compra()
    {
        return $this->hasMany('App\det_compra');
    }
    
}

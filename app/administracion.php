<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class administracion extends Model
{
    protected $table = "administracion";
    protected $fillable = ['nombre','valor'];
}

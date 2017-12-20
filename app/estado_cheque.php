<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estado_cheque extends Model
{
    protected $table = "estado_cheque";
    protected $fillable = ['nombre'];
}

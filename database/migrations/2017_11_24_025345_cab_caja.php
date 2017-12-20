<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CabCaja extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cab_caja', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('usuario_id')->unsigned();
                $table->integer('estado_id')->unsigned();
                $table->date('fecha_inicio');
                $table->double('monto_inicio');
                $table->date('fecha_cierre');
                $table->double('monto_cierre');
                $table->double('arreglo');

                $table->foreign('usuario_id')->references('id')->on('users');
                $table->foreign('estado_id')->references('id')->on('estado');

                $table->rememberToken();
                $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

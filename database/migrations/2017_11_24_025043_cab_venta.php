<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CabVenta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cab_venta', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('tipo_pago_id')->unsigned();
                $table->double('monto');
                $table->integer('tipo_iva_id')->unsigned();
                $table->integer('cliente_id')->unsigned();
                $table->date('fecha');

                $table->foreign('tipo_pago_id')->references('id')->on('tipo_pago');
                $table->foreign('tipo_iva_id')->references('id')->on('tipo_iva');
                $table->foreign('cliente_id')->references('id')->on('clientes');

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

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CabCompra extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cab_compra', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('tipo_pago_id')->unsigned();
                $table->double('monto');
                $table->integer('tipo_iva_id')->unsigned();
                $table->integer('factura_id')->unsigned();
                $table->integer('proveedor_id')->unsigned();
                $table->date('fecha');

                $table->foreign('tipo_pago_id')->references('id')->on('tipo_pago');
                $table->foreign('tipo_iva_id')->references('id')->on('tipo_iva');
                $table->foreign('factura_id')->references('id')->on('factura');
                $table->foreign('proveedor_id')->references('id')->on('proveedores');

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

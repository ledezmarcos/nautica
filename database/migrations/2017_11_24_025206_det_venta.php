<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetVenta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('det_venta', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('cab_venta_id')->unsigned();
                $table->integer('producto_id')->unsigned();
                $table->integer('cantidad');

                $table->foreign('cab_venta_id')->references('id')->on('cab_venta');
                $table->foreign('producto_id')->references('id')->on('productos');

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

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetCompra extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('det_compra', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('cab_compra_id')->unsigned();
                $table->integer('producto_id')->unsigned();
                $table->integer('cantidad');

                $table->foreign('cab_compra_id')->references('id')->on('cab_compra');
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

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cheque extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cheque', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('cab_caja_id')->unsigned();
                $table->date('fecha');
                $table->double('saldo_anterior');
                $table->double('entrada');
                $table->double('salida');
                $table->string('concepto');

                $table->foreign('cab_caja_id')->references('id')->on('cab_caja');

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

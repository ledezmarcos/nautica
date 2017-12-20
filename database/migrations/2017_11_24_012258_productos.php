<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Productos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
                $table->increments('id');
                $table->string('nombre');
                $table->double('precio');
                $table->integer('stock');
                $table->string('tipo');
                $table->string('marca');
                $table->integer('stock_minimo');
                $table->double('codigo');

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

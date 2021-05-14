<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalidaAlmacensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salida_almacens', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('NumSalida');
            $table->string('EmpleadoResponsable');
            $table->date('FechaSalida');
            $table->date('FechaEntrega');
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
        Schema::dropIfExists('salida_almacens');
    }
}

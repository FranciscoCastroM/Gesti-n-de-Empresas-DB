<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlmacensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('almacens', function (Blueprint $table) {
            $table->id('id');
            
            $table->string('nombre_almacen');
            $table->unsignedBigInteger('factura_id')->nullable();
            $table->unsignedBigInteger('salida_Almacen_id')->nullable();
           // $table->string('fecha_entrega_id');

            $table->foreign('factura_id')->references('id')->on('facturas');
            $table->foreign('salida_Almacen_id')->references('id')->on('salida_almacens');
 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('almacens');
    }
}

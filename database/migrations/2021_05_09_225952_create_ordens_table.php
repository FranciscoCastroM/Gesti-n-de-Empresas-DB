<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordens', function (Blueprint $table) {
            $table->id('id');
            //$table->id('id_inventario');
            //$table->id('id_solicitud');
            $table->integer('nit');
            $table->string('proveedor');
            $table->date('fecha_orden');
            $table->integer('monto_total');
            $table->date('fecha_entrega');
            $table->string('aprobada');
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
        Schema::dropIfExists('ordens');
    }
}

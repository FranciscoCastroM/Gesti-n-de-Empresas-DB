<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAlmacenIdToFacturas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('facturas', function (Blueprint $table) {
            //
            $table->unsignedBiginteger('almacen_id')->unsigned();
            $table->foreign('almacen_id')->references('id')->on('almacens')->onDelete('cascade');;
       
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('facturas', function (Blueprint $table) {
            //
            $table->dropForeign(['almacen_id']);
            $table->dropColumn('almacen_id');
       
        });
    }
}

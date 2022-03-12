<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertarDatos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('codigos_postales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('codigo');
            $table->string('asentamiento');
            $table->timestamp('tipo_asenta');
            $table->string('municipio');
             $table->string('estado');
             $table->string('ciudad');
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

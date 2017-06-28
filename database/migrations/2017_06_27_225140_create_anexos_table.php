<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnexosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anexos', function (Blueprint $table) {
            $table->increments('id_anexo');
            $table->string('marca');
            $table->string('modelo');
            $table->string('rotulo');
            $table->integer('numero');
            $table->string('mac');
            $table->string('area');
            $table->string('subarea');
            $table->string('estado');
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
        Schema::drop('anexos');
    }
}

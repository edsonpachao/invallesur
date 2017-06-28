<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaptopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('laptops', function (Blueprint $table) {
            $table->increments('id_laptop');
            $table->string('marca');
            $table->string('modelo');
            $table->string('area');
            $table->string('usuario');
            $table->string('serie');
            $table->string('estado');
            $table->date('garantia');
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
        Schema::drop('laptops');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImpresorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('impresoras', function (Blueprint $table) {
            $table->increments('id_impresora');
            $table->string('marca');
            $table->string('modelo');
            $table->string('area');
            $table->string('ip');
            $table->string('serie');
            $table->string('consumible');
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
        Schema::drop('impresoras');
    }
}

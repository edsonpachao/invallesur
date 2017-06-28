<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesktopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desktops', function (Blueprint $table) {
            $table->increments('id_desktop');
            $table->string('marca');
            $table->string('modelo');
            $table->string('area');
            $table->string('subarea');
            $table->integer('piso');
            $table->string('seriepc');
            $table->string('seriemonitor');
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
        Schema::drop('desktops');
    }
}

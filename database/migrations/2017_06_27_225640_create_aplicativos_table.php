<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAplicativosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //funcion create crea la tabla - funcion table modifica la tabla
        Schema::create('aplicativos', function (Blueprint $table) {
            $table->increments('id_aplicativo');
            $table->string('nombreapp');
            $table->string('version');
            $table->string('serie');
            $table->timestamps();    
                  
        });

        //creacion de clave foranea
        Schema::table('desktops', function ($table) {
            $table->integer('id_aplicativo')->unsigned()->nullable();
            $table->foreign('id_aplicativo')->references('id_aplicativo')->onDelete('cascade')->on('aplicativos');
        });

        //creacion de llave foranea
        Schema::table('laptops', function ($table) {
            //crea campo en tabla a relacionar
            $table->integer('id_aplicativo')->unsigned()->nullable();
            //crea clave foranea 
            $table->foreign('id_aplicativo')->references('id_aplicativo')->onDelete('cascade')->on('aplicativos');

        });
              
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //elimina clave foranea y  campo relacional en la tabla relacionada 
         Schema::table('desktops', function ($table){
            $table->dropforeign(['id_aplicativo']);
            $table->dropcolumn('id_aplicativo');
        });

         //elimina clave foranea y  campo relacional en la tabla relacionada 
        Schema::table('laptops', function ($table){
            $table->dropforeign(['id_aplicativo']);
            $table->dropcolumn('id_aplicativo');
        });
        //borra la tabla al realizar un rollback
        Schema::drop('aplicativos');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{                                                                                                                                                                                                                                                                   
    /**
     * Run the migrations.                                                                                                                                                                  
     *
     * @return void
     */
    public function up()
    
  /*   marca
    modelo
    date
    person
    active
    descripcion */
    {                                                                                                                                                                                                               
        Schema::create('productos', function (Blueprint $table) {                                                                                                                                                                                                   
            $table->increments('id');
            $table->string('producto');                                                                                                                                                                                     
            $table->string('size');
            $table->unsignedInteger('marca_id');//
            $table->unsignedInteger('modelo_id');//
            $table->date('fechaElaboracion');
            $table->unsignedInteger('personaElaboro_id');//
            $table->boolean('estado');
            $table->text('descripcion');
            $table->timestamps();

             $table->foreign('marca_id')->references('id')->on('marcas');
            $table->foreign('modelo_id')->references('id')->on('modelos');
            $table->foreign('personaElaboro_id')->references('id')->on('usuarios'); 
        });

       /*  $table->increments('id');
        $table->string('producto');                                                                                                                                                                                     
        $table->string('size');
        $table->unsignedInteger('marca_id');//
        $table->unsignedInteger('modelo_id');//
        $table->date('fechaElaboracion');
        $table->unsignedInteger('personaElaboro_id');//
        $table->boolean('estado');
        $table->text('descripcion');
        $table->timestamps();

        $table->foreign('marca_id')->references('id')->on('marcas');
        $table->foreign('modelo_id')->references('id')->on('modelos');
        $table->foreign('personaElaboro_id')->references('id')->on('usuarios'); */
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}

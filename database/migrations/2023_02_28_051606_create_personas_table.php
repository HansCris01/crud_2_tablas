<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->bigIncrements('codigo_persona');
            $table->string('nombre',50);
            $table->string('apellido_paterno',50); 
            $table->string('apellido_materno',50);
            $table->unsignedBigInteger('codigo_documento'); 
            $table->foreign('codigo_documento')->references('codigo_documento')->on('Documentos');
            $table->char('dni',8);
            $table->boolean('estado',1);
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
        Schema::dropIfExists('personas');
    }
}

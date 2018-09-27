<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarrerasTable extends Migration
{
    /**Run the migrations.
     * @return void
     */
    public function up(){
        Schema::create('carreras', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo_carrera');
            $table->string('nombre_carrera');
            $table->string('descripcion');
            $table->timestamps();
        });
    }
    /**Reverse the migrations.
     * @return void
     */
    public function down(){
        Schema::dropIfExists('carreras');
    }
}
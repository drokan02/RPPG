<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocenteUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docente_user', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('docente_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->foreign('docente_id')->references('id')->on('docente')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){

        //
    }
}

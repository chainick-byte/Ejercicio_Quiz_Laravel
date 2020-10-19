<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreguntasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preguntas', function (Blueprint $table) {
            $table->id();
            $table->integer('nivel');
            $table->string('tema',20);
            $table->string('enunciado',1024);
            $table->string('repsuesta_1');
            $table->string('repsuesta_2');
            $table->string('repsuesta_3');
            $table->string('repsuesta_4');
            $table->integer('correcta');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('preguntas');
    }
}

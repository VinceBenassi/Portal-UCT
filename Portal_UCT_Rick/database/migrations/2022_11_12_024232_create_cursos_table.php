<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration {

    public function up() {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->integer('Año');
            $table->integer('Semestre');
            $table->string('Sigla');
            $table->string('NombreCurso');
            $table->integer('Sección');
            $table->integer('Créditos');
            $table->string('Tipo');
            $table->string('UnidadDicta');
            $table->integer('Inscritos');
            $table->integer('Cupos');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('cursos');
    }
}

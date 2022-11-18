<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsistenciasTable extends Migration {

    public function up() {
        Schema::create('asistencias', function (Blueprint $table) {
            $table->id();
            $table->integer('NumClase');
            $table->date('Fecha');
            $table->time('HoraInicio');
            $table->float('Asistencia');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('asistencias');
    }
}

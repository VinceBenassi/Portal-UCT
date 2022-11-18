<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitudesTable extends Migration {

    public function up() {
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->id();
            $table->integer('CódigoSolicitud');
            $table->date('FechaSolicitud');
            $table->string('SiglaCurso');
            $table->string('TipoSolicitud');
            $table->string('Estado');
            $table->string('Observación');
            $table->integer('CódigoCarreraSolicitud');
            $table->integer('Año');
            $table->integer('Semestre');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('solicitudes');
    }
}

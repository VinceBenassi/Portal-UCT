<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotasTable extends Migration {

    public function up() {
        Schema::create('notas', function (Blueprint $table) {
            $table->id();
            $table->integer('Descripción');
            $table->date('Fecha');
            $table->string('Porcentaje');
            $table->float('Nota');
            $table->string('TipoEvaluación');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('notas');
    }
}

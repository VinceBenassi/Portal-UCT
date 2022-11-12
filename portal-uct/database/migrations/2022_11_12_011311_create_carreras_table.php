<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarrerasTable extends Migration {
   
    public function up() {
        Schema::create('carreras', function (Blueprint $table) {
            $table->id();
            $table->integer('CodCarrera');
            $table->string('NombreCarrera');
            $table->integer('Plan');
            $table->integer('Ingreso');
            $table->integer('Registro');
            $table->string('Situación');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('carreras');
    }
}

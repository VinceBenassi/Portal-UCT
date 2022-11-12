<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBibliotecasTable extends Migration {

    public function up() {
        Schema::create('bibliotecas', function (Blueprint $table) {
            $table->id();
            $table->string('Material');
            $table->string('Titulo');
            $table->string('Autor');
            $table->date('FechaPréstamo');
            $table->date('FechaDevolución');
            $table->string('Biblioteca');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('bibliotecas');
    }
}

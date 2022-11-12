<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHorariosTable extends Migration {

    public function up() {
        Schema::create('horarios', function (Blueprint $table) {
            $table->id();
            $table->integer('Sección');
            $table->string('Sala');
            $table->string('Día');
            $table->string('Horario');
            $table->string('Edificio');
            $table->string('Campus');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('horarios');
    }
}

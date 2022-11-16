<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration {
    
    public function up() {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('Nombres');
            $table->string('ApellidoP');
            $table->string('ApellidoM');
            $table->dateTime('Fecha_Nac');
            $table->string('Sexo');
            $table->string('Correo');
            $table->string('Contraseña');
            $table->string('Run');
            $table->string('Celular');
            $table->integer('Carrera');
            $table->string('NombreCarrera');
            $table->integer('Plan');
            $table->string('Mención');
            $table->string('EstadoAcad');
            $table->string('Imagen');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('usuarios');
    }
}

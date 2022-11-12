<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Usuario extends Model {
    protected $table = 'usuarios';
    
    protected $fillable = [
        'Nombres',
        'ApellidoP',
        'ApellidoM',
        'Fecha_Nac',
        'Sexo',
        'Correo',
        'Contraseña',
        'Run',
        'Celular',
        'Carrera',
        'NombreCarrera',
        'Plan',
        'Mención',
        'EstadoAcad'
    ];
}

<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Carrera extends Model {
    protected $table = 'carreras';
    
    protected $fillable = [
        'CodCarrera',
        'NombreCarrera',
        'Plan',
        'Ingreso',
        'Registro',
        'Situación'
    ];
}

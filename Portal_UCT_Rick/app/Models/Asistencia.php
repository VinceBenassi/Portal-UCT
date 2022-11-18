<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Asistencia extends Model {
    protected $table = 'asistencias';
    
    protected $fillable = [
        'NumClase',
        'Fecha',
        'HoraInicio',
        'Asistencia'
    ];
}

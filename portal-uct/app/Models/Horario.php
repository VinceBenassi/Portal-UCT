<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Horario extends Model {
    protected $table = 'horarios';
    
    protected $fillable = [
        'Sección',
        'Sala',
        'Día',
        'Horario',
        'Edificio',
        'Campus'
    ];
}

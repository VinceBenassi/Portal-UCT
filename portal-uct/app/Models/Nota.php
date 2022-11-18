<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Nota extends Model {
    protected $table = 'notas';
    
    protected $fillable = [
        'Descripción',
        'Fecha',
        'Porcentaje',
        'Nota',
        'TipoEvaluación'
    ];
}

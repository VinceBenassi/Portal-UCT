<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Curso extends Model {
    protected $table = 'cursos';
    
    protected $fillable = [
        'Año',
        'Semestre',
        'Sigla',
        'NombreCurso',
        'Sección',
        'Créditos',
        'Tipo',
        'UnidadDicta',
        'Inscritos',
        'Cupos'
    ];
}

<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Solicitud extends Model {
    protected $table = 'solicitudes';
    
    protected $fillable = [
        'CódigoSolicitud',
        'FechaSolicitud',
        'SiglaCurso',
        'TipoSolicitud',
        'Estado',
        'Observación',
        'CódigoCarreraSolicitud'
    ];
}

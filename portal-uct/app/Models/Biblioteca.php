<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Biblioteca extends Model {
    protected $table = 'bibliotecas';
    
    protected $fillable = [
        'Material',
        'Titulo',
        'Autor',
        'FechaPréstamo',
        'FechaDevolución',
        'Biblioteca'
    ];
}

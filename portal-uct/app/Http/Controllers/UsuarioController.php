<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Usuario;


class UsuarioController extends Controller {
    public function index() {
        // Preguntamos si la sesión existente está activa
        // ya que de esta forma procedemos a tomar los valores adquiridos de la vista anterior 
        // y así tomarlos en esta para trabajarlos.
        if(!session()->has('rut_nro')) {
            return view('inicio');
        } else {
            // Inicializamos las variables de nuestro stored procedure
            // las cuales almacenarán los datos que se van a registrar en la BD 
            $n_rut = session('rut_nro');
            $n_contra  = session('contra');
        }

        // Realizamos la consulta a la BD para obtener todos los datos de la tabla Usuarios
        $usuarios = DB::table('usuarios')->get();
        return view('menu', ['usuarios' => $usuarios]);
    }
}
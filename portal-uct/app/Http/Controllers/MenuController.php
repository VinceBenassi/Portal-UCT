<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class MenuController extends Controller {
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


            // Realizamos nuestra consulta mediante el stored procedure, además se le asigna un formato a la fecha de nacimiento 
            // para no generar conflicto en el registro, cabe destacar que el llamado de esta consulta debe ser en el mismo 
            // orden que en el de nuestro stored procedure 
            $nombres = DB::select("SELECT Nombres FROM Usuarios WHERE Run = ? AND Contraseña = ?", [$n_rut, $n_contra]);
            $apellidop = DB::select("SELECT ApellidoP FROM Usuarios WHERE Run = ? AND Contraseña = ?", [$n_rut, $n_contra]);
            $apellidom = DB::select("SELECT ApellidoM FROM Usuarios WHERE Run = ? AND Contraseña = ?", [$n_rut, $n_contra]);
            $fecha = DB::select("SELECT Fecha_Nac FROM Usuarios WHERE Run = ? AND Contraseña = ?", [$n_rut, $n_contra]);
            $sexo = DB::select("SELECT Sexo FROM Usuarios WHERE Run = ? AND Contraseña = ?", [$n_rut, $n_contra]);
            $correo = DB::select("SELECT Correo FROM Usuarios WHERE Run = ? AND Contraseña = ?", [$n_rut, $n_contra]);
            $run = DB::select("SELECT Run FROM Usuarios WHERE Run = ? AND Contraseña = ?", [$n_rut, $n_contra]);

            
            return view('menu', [
                'nombres' => $nombres,
                'apellidop' => $apellidop,
                'apellidom' => $apellidom,
                'fecha' => $fecha,
                'sexo' => $sexo,
                'correo' => $correo,
                'rut' => $run
            ]);
        }
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Usuario;

class LoginController extends Controller {

    public function index(Request $request){
        $rut_nro = $_POST["rut"];
        $contra  = $_POST["contra"];


        //Inicia la sesion y trae los datos desde el formulario inicial
        if($rut_nro != ''){
            session(['rut_nro' => $_POST['rut']]);
            session(['contra' => $_POST['contra']]);
        }

        //Declaracion de variables a partir de la informacion de la sesion
        $n_rut = session('rut_nro');
        $n_contra  = session('contra'); 

        $request->input('rut_nro');

        //Pregunta si existe la sesion, sino avanza
        if(!session()->has('rut_nro')) {
            return view('inicio');
        } else {
            //Validaciones del rut // contraseña
            request()->validate([
                'rut'=>'required_without:rut|digits:9'
            ]);

            //Pregunta si existe la persona en la BD
            $query_uct = DB::select("exec RPE.dbo.buscar_persona_rut @rut = ?, @contra = ?", [$n_rut, $n_contra]);

            //Redirecionamiento a las paginas segun las consultas anteriores
            if ($query_uct == []){
                $estado = 'error';
                // Si no existe es vacio retorna al inicio
                return view('inicio', [
                    "n_rut" => $n_rut,
                    "n_contra" => $n_contra,
                    'estado' => $estado
                ]);
            } else {
                $estado = 'éxito';

                // Realizamos la consulta a la BD para obtener todos los datos de la tabla Usuarios
                $usuarios = DB::table('usuarios')
                            ->select('*')
                            ->where('Run', $n_rut)
                            ->get();

                // Agregamos la ruta de la foto de perfil de cada estudiante
                $foto = $request->all();

                if($imagen = $request->file('file')){
                    $nombre = $imagen->getClientOriginalName();
                    $imagen->move('fotos', $nombre);
                    $foto['Imagen']=$nombre;
                }

                return view('menu', [
                    'estado' => $estado,
                    'usuarios' => $usuarios
                ]);
            }
        }
    }

    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('status', 'Has cerrado sesión');
    }
}
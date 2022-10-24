<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuController;

Route::get('/', function () {
    return view('inicio');
});

Route::get('menu', function () {
    return view('menu');
});

Route::get('biblioteca', function () {
    return view('biblioteca');
});

Route::get('notas', function () {
    return view('notasParciales');
});

Route::get('cuenta', function () {
    return view('cuentaCorriente');
});

Route::get('notap', function () {
    return view('notaP');
});

Route::get('asistente', function () {
    return view('horasAsistente');
});

Route::get('certificado', function () {
    return view('certificadoA');
});

Route::get('recuperar', function () {
    return view('recuperarC');
});

Route::get('cambiar', function () {
    return view('cambiarC');
});

Route::get('informacionacademica', function () {
    return view('informacionA');
});

Route::get('documentos', function () {
    return view('documentos');
});

Route::get('observacion', function () {
    return view('obsFichaAcademica');
});

Route::get('solicitudes', function () {
    return view('solicitudesEstudiantes');
});

Route::get('inscripcion', function () {
    return view('inscripcion');
});


Route::post('/', 'App\Http\Controllers\LoginController@index')->name('inicio');
Route::post('menu', 'App\Http\Controllers\MenuController@index')->name('menu');
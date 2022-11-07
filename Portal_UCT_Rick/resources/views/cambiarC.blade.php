@extends('layouts.app')

@section('titulo', 'Cambiar Contraseña')

@section('contenido')
    <section class="container text-center">
        <h2>Cambio de contraseña</h2>

        <div class="alert alert-primary" role="alert">
            <p>
                Su nueva contraseña debe tener 8 caracteres de longitud o más y debe contener: <br>

                -Al menos un punto. <br>
                -Al menos una letra mayúscula y al menos 1 número. <br>
                -Su contraseña nueva no puede ser la misma que su contraseña actual. <br>
                -Solo contraseñas alfanuméricas, sin caracteres especiales por ejemplo (#|"|$|%|á|é|í|ó|ú|ñ)
            </p>
        </div>

        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Ingrese su rut:</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="RUN: 218763421">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Contraseña actual del portal del estudiante:</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword2" class="form-label">Contraseña nueva del portal del estudiante y educa:</label>
                <input type="password" class="form-control" id="exampleInputPassword2">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword3" class="form-label">Confirme contraseña nueva del portal del estudiante y educa:</label>
                <input type="password" class="form-control" id="exampleInputPassword3">
            </div>
                
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Estoy de acuerdo con todos los datos entregados</label>
            </div>
                
            <button type="submit" class="btn btn-primary">Cambio de Contraseña</button>
        </form>
    </section>
@endsection
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

        <form class="mb-3">
            <div class="form-floating run mb-3">
                <input value="@if(Session::has('rut_nro')){{ Session::get('rut_nro')}}@endif" class="form-control input-sm" id="floatingInput rut" onpaste="return false;" ondrop="return false;" inputmode="numeric" onkeypress='validate(event)' class="form-control form-control-lg" size=9 minlength="7" maxlength="9" type="text" pattern="[0-9]+" name="rut" id="rut" placeholder="N° RUN" oninput="checkRut()">
                <label for="floatingInput">RUN sin puntos ni guión</label>
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
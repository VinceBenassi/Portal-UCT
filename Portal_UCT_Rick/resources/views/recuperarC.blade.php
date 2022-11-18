@extends('layouts.app')

@section('titulo', 'Recuperar Contraseña')

@section('contenido')
    <section class="container text-center">
        <h2>Recuperar contraseña</h2>

        <form>
            <div class="mb-3 ">
                <label for="exampleInputEmail1" class="form-label">Ingrese su rut:</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="RUN: 218763421">
            </div>
                    
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Estoy de acuerdo con todos los datos entregados</label>
            </div>

            <button type="submit" class="btn btn-primary">Enviar Contraseña</button>
        </form>
    </section>
@endsection
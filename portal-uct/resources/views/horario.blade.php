@extends('layouts.app')

@section('titulo', 'Horario')

@section('contenido')
    <section class="d-sm-flex">
        <div class="container text-center card mb-3">
            <h5 class="card-header">Horarios y Secciones</h5>

            <div class="card-body">
                <table class="table table-responsive table-sm">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Nombre Profesor</th>
                            <th scope="col">Horarios</th>
                            <th scope="col">Sección</th>
                            <th scope="col">Cambiar</th>
                            <th scope="col">Volver</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <a href="inscripcion" class="btn btn-secondary"><i class="fa-solid fa-circle-arrow-left"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
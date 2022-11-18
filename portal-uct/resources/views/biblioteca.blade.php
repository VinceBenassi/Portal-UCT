@extends('layouts.app')

@section('titulo', 'Préstamos Biblioteca')

@section('contenido')
    <section class="d-sm-flex">
        @include('partials.lateral')



        <aside class="mx-auto">

            <section class="container text-center">
                <div class="alert alert-warning" role="alert">
                    <h4 class="alert-heading"><i class="fa-solid fa-triangle-exclamation"></i> Estimado(a) Franco Vincenzo </h4>
                    <p>Has solicitado los siguientes recursos en biblioteca: </p>
                </div>

                <div class="table-responsive">
                    <table class="table table-sm">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">Material</th>
                                <th scope="col">Título</th>
                                <th scope="col">Autor</th>
                                <th scope="col">Fecha Préstamo</th>
                                <th scope="col">Fecha Devolución</th>
                                <th scope="col">Biblioteca</th>
                            </tr>
                        </thead>
                                                            
                        <tbody>
                            <tr>
                                <th>Libro</th>
                                <th>La biblia</th>
                                <th>Jesus (supongo)</th>
                                <th>01/01/1000</th>
                                <th>18/11/2022</th>
                                <th>Jerusalen Biblioteca</th>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </section>
        </aside>
    </section>
@endsection
@extends('layouts.app')

@section('titulo', 'Préstamos Biblioteca')

@section('contenido')
    <section class="d-sm-flex">
        @include('partials.lateral')



        <aside class="mx-auto">
            <section class="container text-center">
                <div class="alert alert-warning" role="alert">
                    <h4 class="alert-heading"><i class="fa-solid fa-triangle-exclamation"></i> Estimado(a) FRANCO </h4>
                    <p>Has solicitado los siguientes recursos en biblioteca: </p>
                </div>



                <table class="table table-responsive table-sm">
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
                            <th>No tiene préstamos vigentes</th>
                        </tr>
                    </tbody>
                </table>
            </section>
        </aside>
    </section>
@endsection
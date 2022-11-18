@extends('layouts.app')

@section('titulo', 'Observación Ficha Académica')

@section('contenido')
    <section class="d-sm-flex">
        @include('partials.lateral')

        

        <aside class="mx-auto">
            <section class="container text-center">
                <h3>Observación a la Ficha Académica Acumulada</h3>

                <p>
                    En esta sección encontrarás el formulario para solicitar una modificación a tu historial académico, a través de ella puedes solicitar modificación de notas, incorporar notas y/o eliminar notas.
                    Además podrás consultar el estado de tu solicitud.
                </p>

                <h4>El período para realizar solicitudes de Observación a la Ficha ha finalizado.</h4>

                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                Resultados Obs. Ficha Académica
                            </button>
                        </h2>

                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body">
                                <h4>Seleccione una carrera para consultar el estado de su observación a la ficha académica acumulada.</h4>

                                <select class="form-select text-center mb-3" aria-label=".form-select-lg example" data-bs-toggle="collapse" data-bs-target="#collapseCarrera" aria-expanded="false" aria-controls="collapseWidthExample">
                                    <option selected><strong>Seleccione una Carrera...</strong></option>
                                    <option value="1">154 - Plan: 1 : INGENIERIA CIVIL EN INFORMATICA</option>
                                    <option value="2">154 - Plan: 2 : INGENIERIA CIVIL EN INFORMATICA</option>
                                    <option value="3">154 - Plan: 3 : INGENIERIA CIVIL EN INFORMATICA</option>
                                </select>

                                <div class="collapse text-center" id="collapseCarrera">
                                    <h3>Estado de solicitudes</h3>

                                    <div class="table-responsive">
                                        <table class="table table-sm">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th scope="col">Código Solicitud</th>
                                                    <th scope="col">Fecha Solicitud</th>
                                                    <th scope="col">Sigla Curso</th>
                                                    <th scope="col">Tipo Solicitud</th>
                                                    <th scope="col">Estado</th>
                                                    <th scope="col">Obs.</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <th></th>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </aside>
    </section>
@endsection
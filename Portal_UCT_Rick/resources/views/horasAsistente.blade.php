@extends('layouts.app')

@section('titulo', 'Horas Asistente Social')

@section('contenido')
    <section class="d-sm-flex">
        @include('partials.lateral')

        <aside class="mx-auto">
            <section class="container text-center">
                <select class="form-select text-center mb-3" aria-label="Default select example">
                    <option selected><strong>Seleccione una carrera...</strong></option>
                    <option value="1">""</option>
                    <option value="2">""</option>
                    <option value="3">""</option>
                </select>

                <h2>Reserva de horas Asistente Social</h2>

                <p>
                    En esta sección podrás realizar una reserva de hora con un/a asistente social donde se realizan las clases de tu carrera. 
                    Debes considerar que una reserva debe hacerse con <b>24 horas</b> de antelación (de Lunes a Viernes) y <b>sólo se podrá realizar una reserva cada 15 días</b> a través de este medio. 
                    La atención será a través de <b>videollamada</b>, ya que se encuentran <b>suspendidas las atenciones presenciales de forma indefinida</b>.
                </p>

                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                Reservar una hora
                            </button>
                        </h2>

                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body text-center">
                                <strong>Información del Estudiante</strong>
                                
                                <div class="table-responsive">
                                    <table class="table table-sm">
                                        <thead class="table-dark">
                                            <tr>
                                                <th scope="col">RUT</th>
                                                <th scope="col">NOMBRE</th>
                                            </tr>
                                        </thead>
                                                            
                                        <tbody>
                                            <tr>
                                                <th>2064351647</th>
                                                <td>PABLO BENJAMÍN GOMEZ CORTEZ</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <select class="form-select text-center mb-3" aria-label=".form-select-lg example" data-bs-toggle="collapse" data-bs-target="#collapseCarrera" aria-expanded="false" aria-controls="collapseWidthExample">
                                    <option selected><strong>Seleccione una carrera...</strong></option>
                                    <option value="1">Primer semestre</option>
                                    <option value="2">Segundo semestre</option>
                                </select>
                                
                                <div class="collapse text-center" id="collapseCarrera">
                                    <table class="table table-responsive table-sm">
                                        <thead class="table-dark">
                                            <tr>
                                                <th scope="col">Datos de reserva</th>
                                            </tr>
                                        </thead>
                                                            
                                        <tbody>
                                            <tr>
                                                <th>
                                                    <p>La reserva quedará agendada en el campus: CAMPUS SAN JUAN PABLO II</p>

                                                    <section>
                                                        <div class="container text-center">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <p>1. Seleccione una fecha para reserva.</p>

                                                                    <section class="container"> 
                                                                        <form>
                                                                            <div class="row form-group">                                                                                
                                                                                <div class="input-group date" id="datepicker">
                                                                                    <div class="col-sm-10">
                                                                                        <input type="text" class="form-control mb-3">
                                                                                    </div>
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </section>

                                                                    <script type="text/javascript">
                                                                            $('.date').datepicker({ 
                                                                                format: 'dd-mm-yyyy',
                                                                                language: 'es', 
                                                                            });    
                                                                    </script>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <p>2. Fecha escogida para reserva.</p>
                                                                    
                                                                    <div class="text-center">
                                                                        <h3 class="mb-4">
                                                                            04/11/2022
                                                                        </h3>

                                                                        <p class="text-start">
                                                                            Asistente:
                                                                        </p>

                                                                        <p class="card-text">
                                                                            <select class="form-select text-center mb-3" aria-label="Default select example">
                                                                                <option selected><strong>Seleccione la Asistente..</strong></option>
                                                                                <option value="1">MARIA GABRIELA SORUCO BEURET</option>
                                                                                <option value="2">CRISTHIAN EDUARD LIBERONA BARRIGA</option>
                                                                                <option value="3">AXEL GARRIDO JELVEZ</option>
                                                                            </select>
                                                                        </p>

                                                                        <p class="text-start">
                                                                            Hora:
                                                                        </p>

                                                                        <p class="card-text">
                                                                            <select class="form-select text-center mb-3" aria-label="Default select example">
                                                                                <option selected><strong>Seleccione la Hora..</strong></option>
                                                                                <option value="1">13:00</option>
                                                                                <option value="2">10:00</option>
                                                                                <option value="3">17:00</option>
                                                                            </select>
                                                                        </p>
                                                                    </div>

                                                                    <a class="btn btn-primary mb-3" href="" role="button">RESERVAR</a>

                                                                    <div class="alert alert-danger" role="alert">
                                                                        RESERVA EN: CAMPUS SAN JUAN PABLO II
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>    
                                                    </section>
                                                </th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </aside>
    </section>
@endsection
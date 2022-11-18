@extends('layouts.app')

@section('titulo', 'Nota P')

@section('contenido')
    <section class="d-sm-flex">
        @include('partials.lateral')



        <aside class="mx-auto">
            <!--Contenido-->
            <section class="container text-center">
                <h1>Solicitar Nota Pendiente de Evaluación</h1>
                
                <p>
                    La <b>"Nota P"</b> es la calificación utilizada en una determinada asignatura cuando no ha sido posible cumplir con la evaluación final del curso dentro de los plazos establecidos en el Calendario Académico.<br><br>
                    Esta misma sólo podrá ser solicitada si se ha cumplido con al menos el 60% de las actividades y evaluaciones del curso.<br><br>
                    Es responsabilidad de el o la estudiante que ha solicitado la <b>“Nota P”</b> completar la o las evaluaciones no rendidas, lo que permitirá reemplazar la <b>“Nota P”</b> por la calificación correspondiente. <br><br>Si el o la estudiante no cumple dichas exigencias será calificado con nota uno <b>(1,0)</b>.
                    El plazo máximo para mantener una <b>“Nota P”</b> será de un año.
                    Para mayor información puedes solicitar el reglamento de <b>Nota P</b> del alumno de pregrado a <b>dara@uct.cl</b> o bien descargarlo del sitio web: <a href = "https://dara.uct.cl">https://dara.uct.cl</a>
                </p>
            </section>

            <div class="accordion mb-3" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Realizar solicitud
                            </button>
                        </h2>

                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>Selecciona una carrera: </strong>

                                <select class="form-select text-center" aria-label="Default select example">
                                    <option selected><strong>Selecciona una carrera...</strong></option>
                                    <option value="1">154:INGENIERÍA CIVIL EN INFORMÁTICA - PLAN 3</option>
                                </select>

                                <strong>Selecciona un accion:</strong>

                                <!--                -->

                                <select class="form-select text-center mb-3" id="accion" aria-label=".form-select-lg example" data-bs-toggle="collapse" data-bs-target="#collapseSemestre" aria-expanded="false" aria-controls="collapseWidthExample">
                                    <option selected><strong>...</strong></option>
                                    <option value="opc1">NUEVA SOLICITUD</option>
                                    <option value="opc2">PRORROGA</option> 
                                </select>
                                
                                <div class="accion_hide accion_opc1">
                                    <h3 class=" text-center">DATOS DE LA SOLICITUD</h3>
                                    <div class="table-responsive">
                                        <table class="table table-sm mb-5">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th scope="col">Estudiante</th>
                                                    <th scope="col">Rut</th>
                                                    <th scope="col">Registro</th>
                                                    <th scope="col">carrera</th>
                                                    <th scope="col">Plan</th>
                                                    <th scope="col">Mencion</th>
                                                    <th scope="col">Tipo solicitud</th>
                                                </tr>
                                            </thead>
                                                                                
                                            <tbody>
                                                <tr>
                                                    <th>Franco Vincenzo Benassi Cerón</th>
                                                    <th>20365955-5</th>
                                                    <th>2021012008</th>
                                                    <th>154-INGENIERÍA CIVIL EN INFORMÁTICA</th>
                                                    <th>3</th>
                                                    <th>Tecnologías de la Información</th>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <h5 class="text-center">CURSOS INSCRITOS EN EL SEMESTRE 2 AÑO 2022</h5>
                                    <div class="table-responsive">
                                        <table class="table table-sm">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th scope="col">SEL.</th>
                                                    <th scope="col">SIGLA</th>
                                                    <th scope="col">NOMBRE CURSO</th>
                                                    <th scope="col">SECCION</th>
                                                    <th scope="col">AÑO INSC.</th>
                                                </tr>
                                            </thead>
                                                                                
                                            <tbody>
                                                <tr>
                                                    <th><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"></th>
                                                    <th>DDO1054</th>
                                                    <th>MÚSICA Y TEOLOGÍA</th>
                                                    <th>1</th>
                                                    <th>2022 </th>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="table-responsive">
                                        <table class="table table-sm">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th scope="col">MOTIVO</th>
                                                    <th scope="col">OBSERVACION</th>
                                                </tr>
                                            </thead>
                                                                                
                                            <tbody>
                                                <tr>
                                                    <th>
                                                        <select class="form-select" aria-label="Default select example">
                                                                <option selected>Seleccione motivo</option>
                                                                <option value="1">academico</option>
                                                                <option value="2">Hijos </option>
                                                                <option value="3">Salud</option>
                                                                <option value="4">""</option>
                                                                <option value="5">"" </option>
                                                                <option value="6">""</option>
                                                        </select>
                                                    </th>
                                                    <th><textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea></th>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <h5 class="text-center">PUEDES SUBIR ARCHIVOS QUE RESPALDEN TU SOLICITUD</h5>

                                    <div class="table-responsive">
                                        <table class="table table-sm">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th scope="col">SUBIR ARCHIVO</th>
                                                </tr>
                                            </thead>
                                                                                
                                            <tbody>
                                                <tr>
                                                    <th class="text-center">
                                                    <button type="button" class="btn btn-primary">Cargar Archivos</button>
                                                    </th>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <p class="text-center">
                                        (Puedes subir un máx. de 3 archivos, en formato PDF con un tamaño máx. de 5 MB.)
                                    </p>

                                </div>

                                <!-- SEGUNDA OPCION-->
                                <div class="accion_hide accion_opc2">
                                <h3 class=" text-center">DATOS DE LA SOLICITUD</h3>
                                    <div class="table-responsive">
                                        <table class="table table-sm mb-5">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th scope="col">Estudiante</th>
                                                    <th scope="col">Rut</th>
                                                    <th scope="col">Registro</th>
                                                    <th scope="col">carrera</th>
                                                    <th scope="col">Plan</th>
                                                    <th scope="col">Mencion</th>
                                                    <th scope="col">Tipo solicitud</th>
                                                </tr>
                                            </thead>
                                                                                
                                            <tbody>
                                                <tr>
                                                    <th>Franco Vincenzo Benassi Cerón</th>
                                                    <th>20365955-5</th>
                                                    <th>2021012008</th>
                                                    <th>154-INGENIERÍA CIVIL EN INFORMÁTICA</th>
                                                    <th>3</th>
                                                    <th>Tecnologías de la Información</th>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                
                                    <div class="table-responsive">
                                        <table class="table table-sm">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th scope="col">MOTIVO</th>
                                                    <th scope="col">OBSERVACION</th>
                                                </tr>
                                            </thead>
                                                                                
                                            <tbody>
                                                <tr>
                                                    <th>
                                                        <select class="form-select" aria-label="Default select example">
                                                                <option selected>Seleccione motivo</option>
                                                                <option value="1">academico</option>
                                                                <option value="2">Hijos </option>
                                                                <option value="3">Salud</option>
                                                                <option value="4">""</option>
                                                                <option value="5">"" </option>
                                                                <option value="6">""</option>
                                                        </select>
                                                    </th>
                                                    <th><textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea></th>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <h5 class="text-center">PUEDES SUBIR ARCHIVOS QUE RESPALDEN TU SOLICITUD</h5>

                                    <div class="table-responsive">
                                        <table class="table table-sm">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th scope="col">SUBIR ARCHIVO</th>
                                                </tr>
                                            </thead>
                                                                                
                                            <tbody>
                                                <tr>
                                                    <th class="text-center">
                                                    <button type="button" class="btn btn-primary">Cargar Archivos</button>
                                                    </th>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <p class="text-center">
                                        (Puedes subir un máx. de 3 archivos, en formato PDF con un tamaño máx. de 5 MB.)
                                    </p>


                                </div>

                                <script type="text/javascript">
                                $('.accion_hide').addClass('collapse');
                                $('#accion').change(function(){
                                    var selector = '.accion_' + $(this).val();
                                    $('.accion_hide').collapse('hide');
                                    $(selector).collapse('show');
                                });
                                </script>

                                <!--                    -->
 
                            </div>
                        </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Asistencia
                            </button>
                        </h2>

                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>Información del estudiante</strong>

                                <table class="table table-responsive table-sm">
                                    <thead class="table-dark">
                                        <tr>
                                            <th scope="col">RUT</th>
                                            <th scope="col">NOMBRE</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <th>203659555</th>
                                            <td>Franco Vincenzo Benassi Cerón</td>
                                        </tr>
                                    </tbody>
                                </table>



                                <strong>Selecciona una carrera: </strong>

                                <select class="form-select text-center mb-5" aria-label="Default select example">
                                    <option selected><strong>Selecciona una carrera...</strong></option>
                                    <option value="1">154:INGENIERÍA CIVIL EN INFORMÁTICA - PLAN 3</option>
                                </select>

                                <h3 class=" text-center">DATOS DE LA SOLICITUD</h3>
                                    <div class="table-responsive">
                                        <table class="table table-sm mb-5">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th scope="col">Estudiante</th>
                                                    <th scope="col">Rut</th>
                                                    <th scope="col">Registro</th>
                                                    <th scope="col">carrera</th>
                                                    <th scope="col">Plan</th>
                                                    <th scope="col">Mencion</th>
                                                    <th scope="col">Tipo solicitud</th>
                                                </tr>
                                            </thead>
                                                                                
                                            <tbody>
                                                <tr>
                                                    <th>Franco Vincenzo Benassi Cerón</th>
                                                    <th>20365955-5</th>
                                                    <th>2021012008</th>
                                                    <th>154-INGENIERÍA CIVIL EN INFORMÁTICA</th>
                                                    <th>3</th>
                                                    <th>Tecnologías de la Información</th>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>


                                    <h5 class="text-center">SOLICITUDES REALIZADAS</h5>
                                    <div class="table-responsive">
                                        <table class="table table-sm mb-5">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th scope="col">AÑO</th>
                                                    <th scope="col">SEMESTRE</th>
                                                    <th scope="col">FECHA</th>
                                                    <th scope="col">TIPO SOLICITUD</th>
                                                    <th scope="col">ESTADO</th>
                                                    <th scope="col">VER PDF</th>
                                                </tr>
                                            </thead>
                                                                                
                                            <tbody>
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <p class="text-center">Nota: El detalle de la resolución la puedes ver en la segunda hoja del archivo Comprobante.pdf.</p>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
        </aside>
    </section>
@endsection
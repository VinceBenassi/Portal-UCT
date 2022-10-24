@extends('layouts.app')

@section('titulo', 'Nota P')

@section('contenido')
    <section class="d-sm-flex">
        <article id="sidebar-container" class="text-center">
            <a href="menu" class="d-block text-white p-3"><i class="fa-solid fa-id-badge"></i> Inicio</a>
            <a href="inscripcion" class="d-block text-white p-3" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title=""><i class="fa-brands fa-discourse"></i> Inscripción de Cursos</a>
            <a href="notap" class="d-block text-white p-3" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Solicitud para dejar nota pendiente"><i class="fas fa-file-signature"></i> Solicitud Nota P</a>
            <a href="biblioteca" class="d-block text-white p-3" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Consulta deuda biblioteca"><i class="fa-solid fa-book"></i> Préstamos Biblioteca</a>
            <a href="informacionacademica" class="d-block text-white p-3" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Historia académica, cursos inscritos"><i class="fa-solid fa-file-invoice"></i> Información Académica</a>
            <a href="notas" class="d-block text-white p-3" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Notas parciales, asistencia"><i class="fa-solid fa-rectangle-list"></i> Notas Parciales</a>
            <a href="cuenta" class="d-block text-white p-3" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Cta. corriente, beneficios, crédito complementario, emisión pagaré"><i class="fa-solid fa-credit-card"></i> Cuenta Corriente</a>
            <a href="asistente" class="d-block text-white p-3" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Reserva de horas para asistentes sociales"><i class="fa-solid fa-clock"></i> Horas Asistente Social</a>
            <a href="documentos" class="d-block text-white p-3" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Certificado estudiante regular, formularios, formas de pago PAT"><i class="fa-solid fa-file"></i> Documentos</a>
            <a href="solicitudes" class="d-block text-white p-3" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Renuncia, suspensión, reincorporación"><i class="fa-solid fa-file-signature"></i> Solicitudes Estudiantes</a>
            <a href="observacion" class="d-block text-white p-3" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Observación y resultados ficha académica"><i class="fa-solid fa-clipboard-list"></i> Obs. Ficha Académica</a>
            <a href="certificado" class="d-block text-white p-3" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Información sobre los certificados académicos"><i class="fa-solid fa-stamp"></i> Certificado Académico</a>
            <a href="" class="d-block text-white p-3" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Cerrar sesión en el sistema"><i class="fa-solid fa-right-from-bracket"></i> Cerrar Sesión</a>
        </article>



        <aside class="mx-auto">
            <!--Contenido-->
            <section class = "text-black m-5 justify-content-center">
                <h2>Solicitar Nota Pendiente de Evaluación</h2><br>
                
                <p>
                    La <b>"Nota P"</b> es la calificación utilizada en una determinada asignatura cuando no ha sido posible cumplir con la evaluación final del curso dentro de los plazos establecidos en el Calendario Académico.<br><br>
                    Esta misma sólo podrá ser solicitada si se ha cumplido con al menos el 60% de las actividades y evaluaciones del curso.<br><br>
                    Es responsabilidad de el o la estudiante que ha solicitado la <b>“Nota P”</b> completar la o las evaluaciones no rendidas, lo que permitirá reemplazar la <b>“Nota P”</b> por la calificación correspondiente. <br><br>Si el o la estudiante no cumple dichas exigencias será calificado con nota uno <b>(1,0)</b>.
                    El plazo máximo para mantener una <b>“Nota P”</b> será de un año.
                    Para mayor información puedes solicitar el reglamento de <b>Nota P</b> del alumno de pregrado a <b>dara@uct.cl</b> o bien descargarlo del sitio web: <a href = "https://dara.uct.cl">https://dara.uct.cl</a>
                </p>
            </section>



            <section class="text-center">
                <button class="btn btn-outline-success" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseWidthExample">
                    Consulta Acerca de los Resultados
                </button>
            
                <div class="collapse text-center" id="collapseExample">
                    <h2>Información del estudiante</h2>

                    <table class="table table-sm border-dark">
                        <thead class="table-dark border-dark">
                            <tr>
                                <th scope="col">Rut</th>
                                <th scope="col">Nombre</th>  
                            </tr>
                        </thead>
                    
                        <tbody>
                            <tr>
                                <td>{{ $n_rut ?? '' }}</td>
                                <td>Erioldo Mapitulo</td>
                            </tr>
                        </tbody>
                    </table>



                    <select class="form-select form-select-lg text-center mb-3" aria-label=".form-select-lg example" data-bs-toggle="collapse" data-bs-target="#collapseDatos" aria-expanded="false" aria-controls="collapseWidthExample">
                        <option selected>Selecciona la carrera</option>
                        <option value="1">INGENIERÍA CIVIL EN INFORMÁTICA</option>
                    </select>



                    <div class="collapse text-center" id="collapseDatos">
                        <h2>Datos de la solicitud</h2>

                        <div class="card card-body text-center mb-3">
                            <ul class="list-group list-group-flush mb-3">
                                <li class="list-group-item">Estudiante: {{ $nombres ?? '' }} </li>
                                <li class="list-group-item">Rut: {{ $n_rut ?? '' }}</li>
                                <li class="list-group-item">Registro: {{ $apellidop ?? '' }}</li>
                                <li class="list-group-item">Carrera: {{ $apellidom ?? '' }}</li>
                                <li class="list-group-item">Plan: {{ $fecha ?? '' }}</li>
                                <li class="list-group-item">Mención: {{ $sexo ?? '' }}</li>
                            </ul>
                        </div>



                        <table class="table table-sm">
                            <h4>Solicitudes realizadas</h4>
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">Año</th>
                                    <th scope="col">Semestre</th>
                                    <th scope="col">Fecha</th>
                                    <th scope="col">Tipo de solicitud</th>
                                    <th scope="col">Estado</th>
                                    <th scope="col">Ver PDF</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <th scope="row">2021</th>
                                    <td>2</td>
                                    <td>27-10-2021</td>
                                    <td>NUEVA SOLICITUD</td>
                                    <td>APROBADA</td>
                                    <td><a href="" class="btn btn-secondary">Comprobante.pdf</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </aside>
    </section>
@endsection
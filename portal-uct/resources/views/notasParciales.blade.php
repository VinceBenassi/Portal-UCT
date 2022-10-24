@extends('layouts.app')

@section('titulo', 'Notas Parciales')

@section('contenido')
    <!-- Funciones generales -->
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
            <section class="container text-center">
                <h1>Solicitud estudiante</h1>

                <p>
                    En esta sección encontrarás información académica: 
                    cursos inscritos, cursos aprobados, cursos reprobados, competencias genéricas y créditos de libre disposición.
                </p>

                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Notas parciales
                            </button>
                        </h2>

                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>Información del estudiante</strong>

                                <table class="table">
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


                                
                                <strong>Selecciona una carrera: </strong>

                                <select class="form-select text-center" aria-label="Default select example">
                                    <option selected><strong>Selecciona una carrera...</strong></option>
                                    <option value="1">154:INGENIERÍA CIVIL EN INFORMÁTICA - PLAN 3</option>
                                </select>

                                <strong>Selecciona un semestre:</strong>

                                <select class="form-select text-center" aria-label=".form-select-lg example" data-bs-toggle="collapse" data-bs-target="#collapseSemestre" aria-expanded="false" aria-controls="collapseWidthExample">
                                    <option selected><strong>Seleccione un semestre...</strong></option>
                                    <option value="1">Primer semestre</option>
                                    <option value="2">Segundo semestre</option>
                                </select>

                                <div class="collapse text-center" id="collapseSemestre">
                                    <strong>Selecciona un curso:</strong>

                                    <select class="form-select text-center" aria-label=".form-select-lg example" data-bs-toggle="collapse" data-bs-target="#collapseCurso" aria-expanded="false" aria-controls="collapseWidthExample">
                                        <option selected><strong>Selecciona un curso...</strong></option>
                                        <option value="1">Algoritmos de Optimización</option>
                                        <option value="2">Robótica</option>
                                        <option value="3">Cálculo Avanzado</option>
                                    </select>

                                    <div class="collapse text-center" id="collapseCurso">
                                        <strong>Notas parciales</strong>

                                        <table class="table">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th scope="col">Descripcion</th>
                                                    <th scope="col">Fecha</th>
                                                    <th scope="col">Porcentaje</th>
                                                    <th scope="col">Nota</th>
                                                    <th scope="col">Tipo de Evaluacion</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <th>hjhj</th>
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



                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Asistencia
                            </button>
                        </h2>

                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>Información del estudiante</strong>

                                <table class="table">
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



                                <strong>Selecciona una carrera: </strong>

                                <select class="form-select text-center" aria-label="Default select example">
                                    <option selected><strong>Selecciona una carrera...</strong></option>
                                    <option value="1">154:INGENIERÍA CIVIL EN INFORMÁTICA - PLAN 3</option>
                                </select>

                                <strong>Selecciona un semestre:</strong>

                                <select class="form-select text-center" aria-label=".form-select-lg example" data-bs-toggle="collapse" data-bs-target="#collapseSemestre" aria-expanded="false" aria-controls="collapseWidthExample">
                                    <option selected><strong>Selecciona una semestre...</strong></option>
                                    <option value="1">Primer semestre</option>
                                    <option value="2">Segundo semestre</option>
                                </select>

                                <div class="collapse text-center" id="collapseSemestre">
                                    <strong>Selecciona un curso:</strong>

                                    <select class="form-select text-center" aria-label=".form-select-lg example" data-bs-toggle="collapse" data-bs-target="#collapseCurso" aria-expanded="false" aria-controls="collapseWidthExample">
                                        <option selected><strong>Selecciona un curso...</strong></option>
                                        <option value="1">Algoritmos de Optimización</option>
                                        <option value="2">Robótica</option>
                                        <option value="3">Cálculo Avanzado</option>
                                    </select>

                                    <div class="collapse text-center" id="collapseCurso">
                                        <strong>Asistencias</strong>

                                        <table class="table">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th scope="col">N° Clase</th>
                                                    <th scope="col">Fecha</th>
                                                    <th scope="col">Hora de Inicio</th>
                                                    <th scope="col">Asistencia</th>
                                                </tr>
                                            </thead>
                                                            
                                            <tbody>
                                                <tr>
                                                    <th>""</th>
                                                    <td> ""</td>
                                                    <td>""</td>
                                                    <td>""</td>
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
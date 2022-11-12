@extends('layouts.app')

@section('titulo', 'Documentos')

@section('contenido')
    <section class="d-sm-flex">
        <article id="sidebar-container" class="text-center">
            <a href="menu" class="d-block p-3"><i class="fa-solid fa-id-badge"></i> Inicio</a>
            <a href="inscripcion" class="d-block p-3" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title=""><i class="fa-brands fa-discourse"></i> Inscripción de Cursos</a>
            <a href="notap" class="d-block p-3" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Solicitud para dejar nota pendiente"><i class="fas fa-file-signature"></i> Solicitud Nota P</a>
            <a href="biblioteca" class="d-block p-3" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Consulta deuda biblioteca"><i class="fa-solid fa-book"></i> Préstamos Biblioteca</a>
            <a href="informacionacademica" class="d-block p-3" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Historia académica, cursos inscritos"><i class="fa-solid fa-file-invoice"></i> Información Académica</a>
            <a href="notas" class="d-block p-3" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Notas parciales, asistencia"><i class="fa-solid fa-rectangle-list"></i> Notas Parciales</a>
            <a href="cuenta" class="d-block p-3" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Cta. corriente, beneficios, crédito complementario, emisión pagaré"><i class="fa-solid fa-credit-card"></i> Cuenta Corriente</a>
            <a href="asistente" class="d-block p-3" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Reserva de horas para asistentes sociales"><i class="fa-solid fa-clock"></i> Horas Asistente Social</a>
            <a href="documentos" class="d-block p-3" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Certificado estudiante regular, formularios, formas de pago PAT"><i class="fa-solid fa-file"></i> Documentos</a>
            <a href="solicitudes" class="d-block p-3" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Renuncia, suspensión, reincorporación"><i class="fa-solid fa-file-signature"></i> Solicitudes Estudiantes</a>
            <a href="observacion" class="d-block p-3" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Observación y resultados ficha académica"><i class="fa-solid fa-clipboard-list"></i> Obs. Ficha Académica</a>
            <a href="certificado" class="d-block p-3" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Información sobre los certificados académicos"><i class="fa-solid fa-stamp"></i> Certificado Académico</a>
            <a href="" class="d-block p-3" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Cerrar sesión en el sistema"><i class="fa-solid fa-right-from-bracket"></i> Cerrar Sesión</a>
        </article>


        
        <aside class="mx-auto">
            <section class="container text-center">
                <h1>Documentos</h1>

                <div class="alert alert-primary" role="alert">
                    <h4 class="alert-heading">
                        Estimados/as estudiantes,
                        La Vicerrectoría Académica a través de la Dirección de Admisión y Registros Académicos en conjunto con la Dirección de Informática, 
                        tiene el agrado de comunicarles que contamos con un nuevo servicio de Firma Electrónica Avanzada, el cual permitirá brindarles una mejor atención y 
                        disminuir los tiempos de espera en lo que se requiere a solicitudes de certificados.
                    </h4>

                    <a href="Firma_Electronica_Avanzada_DARA.pdf" class="btn btn-primary">Leer más...</a>
                </div>

                <div class="alert alert-warning" role="alert">
                    <h4 class="alert-heading">
                        * Para imprimir los documentos se recomienda abrir con Adobe Acrobat Reader. <br>
                        * Debe habilitar la opción de ventanas emergentes de su navegador.
                    </h4>
                </div>

                <table class="table table-responsive table-sm">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Carrera</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <th>
                                <select class="form-select text-center mb-3" aria-label=".form-select-lg example" data-bs-toggle="collapse" data-bs-target="#collapseDocumentos" aria-expanded="false" aria-controls="collapseWidthExample">
                                    <option selected><strong>Selecciona una carrera...</strong></option>
                                    <option value="1">154:INGENIERÍA CIVIL EN INFORMÁTICA - PLAN 3</option>
                                </select>

                                <div class="collapse text-center" id="collapseDocumentos">
                                    <select class="form-select text-center mb-3" aria-label=".form-select-lg example" data-bs-toggle="collapse" data-bs-target="#collapseCertificados" aria-expanded="false" aria-controls="collapseWidthExample">
                                        <option selected><strong>Seleccione un semestre...</strong></option>
                                        <option value="1">SEGUNDO / 2022</option>
                                    </select>

                                    <div class="collapse text-center" id="collapseCertificados">
                                        <!-- Certificados -->
                                        <div class="card border-white">
                                            <div class="card-header bg-dark text-white">
                                                <strong>CERTIFICADOS</strong>
                                            </div>
                                            
                                            <div class="card-body">
                                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">C.Estudiante Regular</button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">C.Académico</button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">C.Conducta</button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false">C.Permanencia</button>
                                                    </li>
                                                </ul>
                                                
                                                <div class="tab-content" id="myTabContent">
                                                    <!-- Certificado Estudiante Regular -->
                                                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                                        <div class="card border-white">
                                                            <div class="card-header bg-dark text-white"><strong>Certificado Estudiante Regular</strong></div>
                                                            <div class="card-body">

                                                                <div class="text-start">
                                                                    <p>
                                                                        <strong>Puedes seleccionar los fines para el que deseas el certificado:</strong>
                                                                    </p>

                                                                    <p class="card-text">
                                                                        <select class="form-select text-center mb-3" aria-label="Default select example">
                                                                            <option selected><strong>Fines:</strong></option>
                                                                            <option value="1">BENEFICIOS ESTUDIANTILES Y ASIGNACION FAMILIAR</option>
                                                                            <option value="2">PARA LOS FINES QUE ESTIME CONVENIENTE</option>
                                                                            <option value="3">SEGURO ESCOLAR</option>
                                                                        </select>
                                                                    </p>

                                                                </div>
                                                                <a class="btn btn-primary" href="" role="button">Generar Certificado</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Certificado Académico -->
                                                    <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                                                        <div class="card border-white">

                                                            <div class="card-header bg-dark text-white">
                                                                <strong>Certificado Académico</strong>
                                                            </div>

                                                            <div class="card-body">
                                                                <div class="text-start">

                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                                        
                                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                                            Historia Académica
                                                                        </label>
                                                        
                                                                    </div>

                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                                        
                                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                                            Notas Periodo
                                                                        </label>

                                                                    </div>

                                                                    <p><strong>Estado de los Cursos:</strong></p>
                                                                    
                                                                    <p class="card-text">
                                                                        <select class="form-select text-center mb-3" aria-label="Default select example">
                                                                            <option selected><strong>Seleccione..</strong></option>
                                                                            <option value="1">APROBADOS</option>
                                                                            <option value="2">TODOS LOS CURSOS</option>
                                                                            <option value="3">TODOS LOS CURSOS(SOLO CON NOTA)</option>
                                                                        </select>
                                                                    </p>

                                                                    <a class="btn btn-primary" href="#" role="button">Descargar Certificado Academico</a>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
    
                                                    <!-- Certificado conducta -->
                                                    <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                                                        <div class="card border-white">

                                                            <div class="card-header bg-dark text-white">
                                                                <strong>Certificado de Conducta</strong></div>
                                                            <div class="card-body">

                                                                <div class="text-start">
                                                                    <p>
                                                                        <strong>Sanciones:</strong>
                                                                        Durante su permanencia el(la) estudiante no tuvo sanciones disciplinarias por contravención al 
                                                                        Reglamento de Investigaciones Sumarias y Sumarios que instruyen a los Estudiantes de la Universidad 
                                                                        Católica de Temuco.
                                                                    </p>
                                                                    <p>
                                                                        <strong>Observación:</strong>
                                                                        Sin Observaciones
                                                                    </p>
                                                                </div>
                                                                <a class="btn btn-primary" href="#" role="button">Descargar Certificado de Conducta</a>
                                                            
                                                            </div>
                                                        </div>
                                                    </div>
    
                                                    <!-- Certificado permanencia -->
                                                    <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">
                                                        <div class="card border-white">
                                                            <div class="card-header bg-dark text-white mb-3"><strong>Certificado de Permanencia</strong></div>
                                                                <div class="card-body">
                                                                    <p>
                                                                        Durante su permanencia el(la) estudiante no tuvo impedimentos académicos ni sanciones 
                                                                        disciplinarias por contravenir el Reglamento del Alumno Regular de la Universidad.
                                                                    </p>
                                                                    
                                                                    <a class="btn btn-primary" href="#" role="button">Descargar Certificado de Permanencia</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Convenio de prestación de servicios -->
                                                <div class="card border-white">
                                                    <div class="card-header bg-dark text-white mb-3"><strong>Convenio de prestación de servicios</strong></div>
                                                    <div class="card-body">
                                                        <p><strong>Descargar convenio prestación de servicios</strong></p>
                                                        <a class="btn btn-primary" href="#" role="button">Descargar Convenio</a>
                                                    </div>
                                                </div>

                                                <!-- Formulario de Apelación para Causal de Eliminación -->
                                                <div class="card border-white">
                                                    <div class="card-header bg-dark text-white mb-3"><strong>Formulario de Apelación para Causal de Eliminación</strong></div>
                                                    
                                                    <div class="card-body">
                                                        <p>El formulario debe ser completado y entregado impreso en tu carrera.</p>
                                                        <a class="btn btn-primary" href="https://estudiantes.uct.cl/certificados_firmas_digitales/documentos/formulario_apelacion.pdf" role="button">Descargar Convenio</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </th>
                        </tr>
                    </tbody>
                </table>
            </section>
        </aside>
    </section>
@endsection
@extends('layouts.app')

@section('titulo', 'Documentos')

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

                <table class="table">
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
                                    <select class="form-select text-center" aria-label=".form-select-lg example" data-bs-toggle="collapse" data-bs-target="#collapseCertificados" aria-expanded="false" aria-controls="collapseWidthExample">
                                        <option selected><strong>Seleccione un semestre...</strong></option>
                                        <option value="1">Primer semestre</option>
                                        <option value="2">Segundo semestre</option>
                                    </select>

                                    <div class="collapse text-center" id="collapseCertificados">
                                        
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
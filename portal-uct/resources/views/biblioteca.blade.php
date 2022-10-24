@extends('layouts.app')

@section('titulo', 'Préstamos Biblioteca')

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
            <div class="alert alert-warning" role="alert">
                <h4 class="alert-heading"><i class="fa-solid fa-triangle-exclamation"></i> Estimado(a) FRANCO </h4>
                <p>Has solicitado los siguientes recursos en biblioteca: </p>
            </div>



            <table class="table">
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
        </aside>
    </section>
@endsection
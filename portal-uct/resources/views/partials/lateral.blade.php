<article class="d-flex flex-column flex-shrink-0 p-3 text-center">
    <ul class="nav nav-pills nav-flush flex-column mb-auto">
        <li class="nav-item">
            <a href="menu" class="nav-link active border-bottom p-3"><i class="fa-solid fa-id-badge"></i> Inicio</a>
        </li>

        <li>
            <a href="inscripcion" class="nav-link border-bottom p-3" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title=""><i class="fa-brands fa-discourse"></i> Inscripción de Cursos</a>
        </li>

        <li>
            <a href="notap" class="nav-link border-bottom p-3" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Solicitud para dejar nota pendiente"><i class="fas fa-file-signature"></i> Solicitud Nota P</a>
        </li>

        <li>
            <a href="biblioteca" class="nav-link border-bottom p-3" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Consulta deuda biblioteca"><i class="fa-solid fa-book"></i> Préstamos Biblioteca</a>
        </li>

        <li>
            <a href="informacionacademica" class="nav-link border-bottom p-3" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Historia académica, cursos inscritos"><i class="fa-solid fa-file-invoice"></i> Información Académica</a>
        </li>

        <li>
            <a href="notas" class="nav-link border-bottom p-3" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Notas parciales, asistencia"><i class="fa-solid fa-rectangle-list"></i> Notas Parciales</a>
        </li>

        <li>
            <a href="cuenta" class="nav-link border-bottom p-3" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Cta. corriente, beneficios, crédito complementario, emisión pagaré"><i class="fa-solid fa-credit-card"></i> Cuenta Corriente</a>
        </li>

        <li>
            <a href="asistente" class="nav-link border-bottom p-3" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Reserva de horas para asistentes sociales"><i class="fa-solid fa-clock"></i> Horas Asistente Social</a>
        </li>

        <li>
            <a href="documentos" class="nav-link border-bottom p-3" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Certificado estudiante regular, formularios, formas de pago PAT"><i class="fa-solid fa-file"></i> Documentos</a>
        </li>

        <li>
            <a href="solicitudes" class="nav-link border-bottom p-3" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Renuncia, suspensión, reincorporación"><i class="fa-solid fa-file-signature"></i> Solicitudes Estudiantes</a>
        </li>

        <li>
            <a href="observacion" class="nav-link border-bottom p-3" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Observación y resultados ficha académica"><i class="fa-solid fa-clipboard-list"></i> Obs. Ficha Académica</a>
        </li>

        <li>
            <a href="certificado" class="nav-link border-bottom p-3" data-bs-toggle="tooltip" data-bs-placement="right" title="Información sobre los certificados académicos"><i class="fa-solid fa-stamp" aria-label="Información sobre los certificados académicos"></i> Certificado Académico</a>
        </li>
    </ul>

    <div class="dropdown">
        <form action="/logout" method="POST">
            @csrf
            <a href="#" onclick="this.closest('form').submit()" class="nav-link border-bottom p-3" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Cerrar sesión en el sistema"><i class="fa-solid fa-right-from-bracket"></i> Cerrar Sesión</a>
        </form>
    </div>
</article>
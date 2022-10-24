@extends('layouts.app')

@section('titulo', 'Menú')

@section('contenido')
    <!-- Funciones generales -->
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



        <aside class="mx-auto col-md-4">
            <div class="card text-center">
                <img src="images/yo.jpg" class="card-img-top" alt="...">
                
                <div class="card-body">
                    <h5 class="card-title">Bienvenido/a Franco Benassi</h5>
                    
                    <p class="card-text"> Estimado/a Estudiante
                        Para mantenernos en contacto y brindarte una mejor atención sobre tus beneficios estudiantiles, 
                        te invitamos a actualizar tus datos personales aquí:
                    </p>
                </div>
                
                <ul class="list-group list-group-flush mb-3">
                    <li class="list-group-item">Rut: {{ $n_rut ?? '' }}</li>
                    <li class="list-group-item">Nombres: {{ $nombres ?? '' }} </li>
                    <li class="list-group-item">Apellido paterno: {{ $apellidop ?? '' }}</li>
                    <li class="list-group-item">Apellido materno: {{ $apellidom ?? '' }}</li>
                    <li class="list-group-item">Fecha de nacimiento: {{ $fecha ?? '' }}</li>
                    <li class="list-group-item">Sexo: {{ $sexo ?? '' }}</li>
                    <li class="list-group-item">E-mail UCTemuco: {{ $correo ?? '' }}</li>
                </ul>
  
                <form action="{{route('menu')}}">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" pattern="[a-zA-Z0-9!#$%&'*\/=?^_`{|}~+-]([\.]?[a-zA-Z0-9!#$%&'*\/=?^_`{|}~+-])+@[a-zA-Z0-9]([^@&%$/()=?¿!.,:;]|\d)+[a-zA-Z0-9][\.][a-zA-Z]{2,4}([\.][a-zA-Z]{2})?" name="visi_email" placeholder="Example@gmail.com">
                        <label for="floatingInput">E-mail alternativo (Priorizar correo gmail): </label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="tel" class="form-control" id="tel1" name="visi_fono_per" placeholder="Ej. 56912341234" pattern="[0-9]+" minlength="7" maxlength="12" onkeypress='validate(event)' oninput="checkNum()"/>
                        <label for="floatingInput">Número de celular personal:</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="tel" class="form-control" id="tel2" name="visi_fono_per" placeholder="Ej. 56912341234" pattern="[0-9]+" minlength="7" maxlength="12" onkeypress='validate(event)' oninput="checkNum()"/>
                        <label for="floatingInput">Confirme su número de celular personal: </label>
                    </div>

                    <button type="submit" id="buttonSub" class="btn btn-success">Grabar</button>
                </form>
            </div>
        </aside>
    </section>
@endsection
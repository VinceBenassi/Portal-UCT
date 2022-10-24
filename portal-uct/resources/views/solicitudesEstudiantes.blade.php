@extends('layouts.app')

@section('titulo', 'Solicitudes Estudiantes')

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
                <h1>Solicitudes Estudiantes</h1>

                <p>
                    En esta sección encontrarás el formulario mediante el cual puedes hacer una solicitud de Reincorporación, Suspensión o Renuncia. 
                    Además puedes consultar el estado en que se encuentra tu solicitud.
                    Para visualizar el contenido solo debes hacer click sobre el Título de tu interés el cual desplegará el contenido deseado.
                </p>

                <div class="alert alert-danger" role="alert">
                    <h4 class="alert-heading">Proceso de suspensión Beneficios de arancel MINEDUC 2022</h4>

                    <p>Estimados Estudiantes:</p>
                    <p>Junto con saludar, informamos que desde el 02 de Agosto hasta el 29 de Septiembre se encuentra habilitado el proceso de suspensión de Beneficios Estudiantiles MINEDUC.</p>
                    <p>Si realizaste suspensión o renuncia académica y cuentas con Gratuidad, Beca de arancel o Fondo Solidario de Crédito Universitario (FSCU) debes ingresar al siguiente link <a href="https://forms.gle/LyZ3ZygrS3TEAQjG8">https://forms.gle/LyZ3ZygrS3TEAQjG8</a> y completar el formulario online para solicitar la suspensión de tu beneficio, al que podrás ingresar solo a través de tu correo electrónico institucional.</p>
                    <p>Descarga <a href="https://estudiantes.uct.cl/documentos/INSTRUCTIVO_SUSPENSJON_BENEFICIOS_ESTUDIANTES.pdf">AQUÍ</a> el instructivo del proceso de suspensión de Beneficios Estudiantes.</p>
                    <p><h5>Respecto a la carga de documentos en formato PDF, debes considerar lo siguiente:</h5></p>
                    <p><strong>1. Formulario suspensiones:</strong> Solo lo debes cargar en caso de contar con Beca de arancel. Se exime de esta obligación a los estudiantes que tengan Gratuidad.</p>
                    <p><strong>2. Documento de respaldo para acreditar motivo de suspensión:</strong> Solo lo debes cargar en caso de contar con Gratuidad o Becas de arancel, toda vez que las suspensiones totales desde el año de asignación del beneficio a la fecha (incluyendo solicitud actual) sean superiores a 02 semestres académicos. Se exime de esta obligación a los estudiantes que tengan FSCU.</p>
                    <p><strong>*EL PROCESO DE SUSPENSIÓN ES DE EXCLUSIVA RESPONSABILIDAD DEL ESTUDIANTE*</strong></p>
                </div>


                <div class="accordion accordion-flush" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
                                Ingresar Solicitud
                            </button>
                        </h2>

                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body">
                                <table class="table">
                                    <thead class="table-dark">
                                        <tr>
                                            <th scope="col">Rut</th>
                                            <th scope="col">Nombre del alumno</th>
                                            <th scope="col">Celular</th>
                                            <th scope="col">E-Mail</th>
                                        </tr>
                                    </thead>
                                        
                                    <tbody>
                                        <tr>
                                            <th>21080232-2</th>
                                            <td>Pablo Javier Gomez Quidel</td>
                                            <td>+56953699462</td>
                                            <td>Pgomez2021@uct.cl</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <select class="form-select text-center mb-3" aria-label=".form-select-lg example" data-bs-toggle="collapse" data-bs-target="#collapseCarrera" aria-expanded="false" aria-controls="collapseWidthExample">
                                    <option selected><strong>Seleccione una Carrera...</strong></option>
                                    <option value="1">154 - Plan: 1 : INGENIERIA CIVIL EN INFORMATICA</option>
                                    <option value="2">154 - Plan: 2 : INGENIERIA CIVIL EN INFORMATICA</option>
                                    <option value="3">154 - Plan: 3 : INGENIERIA CIVIL EN INFORMATICA</option>
                                </select>

                                <div class="collapse text-center" id="collapseCarrera">
                                    <table class="table">
                                        <thead class="table-dark">
                                            <tr>
                                                <th scope="col">Beneficios</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>GRATUIDAD MATRICULA MINEDUC</td>
                                            </tr>
                                            <tr>
                                                <td>GRATUIDAD ARANCEL MINEDUC</td>
                                            </tr>
                                            <tr>
                                                <td>BRECHA GRATUIDAD ARANCEL UCT</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <table class="table">
                                        <thead class="table-dark">
                                            <tr>
                                                <th scope="col">Registro</th>
                                                <th scope="col">Año Ingreso	</th>
                                                <th scope="col">Carrera</th>
                                                <th scope="col">Situación</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <th>2064351647</th>
                                                <td>2021</td>
                                                <td>INGENIERÍA CIVIL EN INFORMÁTICA</td>
                                                <td>REGULAR</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <h3>Formulario ingreso solicitud</h3>

                                    <select class="form-select text-center" aria-label=".form-select-lg example" data-bs-toggle="collapse" data-bs-target="#collapseRenuncia" aria-expanded="false" aria-controls="collapseWidthExample">
                                        <option selected><strong>Tipo de solicitud..</strong></option>
                                        <option value="1">RENUNCIA</option>
                                        <option value="1">SUSPENCION</option>
                                    </select>

                                    <div class="collapse text-center" id="collapseRenuncia">
                                        <div class="alert alert-primary" role="alert">
                                            <h4 class="alert-heading">Con Beneficio Estudiantil.</h4>
                                            <p>Recordar conversar con la asistente social para informarse de los ajustes de beneficios en los casos de suspensión.</p>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                Resultados de la Solicitud
                            </button>
                        </h2>

                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                            <div class="accordion-body">
                                <h4>Ingrese una carrera para consultar el estado de su solicitud.</h4>

                                <select class="form-select text-center mb-3" aria-label=".form-select-lg example" data-bs-toggle="collapse" data-bs-target="#collapseCarrera" aria-expanded="false" aria-controls="collapseWidthExample">
                                    <option selected><strong>Seleccione una Carrera...</strong></option>
                                    <option value="1">154 - Plan: 1 : INGENIERIA CIVIL EN INFORMATICA</option>
                                    <option value="2">154 - Plan: 2 : INGENIERIA CIVIL EN INFORMATICA</option>
                                    <option value="3">154 - Plan: 3 : INGENIERIA CIVIL EN INFORMATICA</option>
                                </select>

                                <div class="collapse text-center" id="collapseCarrera">
                                    <table class="table">
                                        <thead class="table-primary">
                                            <tr>
                                                <th scope="col">Código Solicitud</th>
                                                <th scope="col">Fecha Solicitud</th>
                                                <th scope="col">Tipo Solicitud</th>
                                                <th scope="col">Estado</th>
                                                <th scope="col">Observación</th>
                                                <th scope="col">Comprobante</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>

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
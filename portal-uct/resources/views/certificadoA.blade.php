@extends('layouts.app')

@section('titulo', 'Certificado Académico')

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
                <h3>Certificación Académica</h3>

                <p>
                    En esta sección encontrarás información sobre la certificación académica: Sobre los cursos disponibles para la certificacion, formulario de postulacion.
                </p>

                <p>
                    El Certificado Académico puede complementar tu formación académico-profesional facilitando concentrar tu interés en temáticas particulares.
                </p>

                <h5>CARACTERÍSTICAS DEL CERTIFICADO ACADÉMICO</h5>

                <p>
                    <h6>ADICIONAL</h6>
                    Adicional a la titulación; una vez completados todos los requisitos académicos del plan de estudios de su carrera.
                </p>

                <p>
                    <h6>COMPLEMENTARIO</h6>
                    Complementario a la formación, en la medida que se focaliza en una temática de interés que puede ser diferente a las disciplinas de su carrera, 
                    en las que se abordan problemáticas actuales y/o locales y desarrolla la competencia genérica identitaria de respeto y valoración a la diversidad o actuación ética.
                </p>

                <p>
                    <h6>ELECTIVO</h6>
                    Electivo en un doble sentido: el estudiante escoge si seguir o no un Certificado y, también elige, las actividades curriculares con las que cumple las exigencias para obtenerlo.
                </p>

                <p>
                    <h6>INTERDISCIPLINARIO</h6>
                    Interdisciplinario ya que se encuentra con estudiantes de otras carreras. Con ellos podrá analizar y resolver problemáticas movilizando diversos tipos de saberes.
                </p>

                <iframe class="mb-3" width="350px" height="350px" src="https://www.youtube.com/embed/ChVfPeU6ZiQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                             <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                Información general
                            </button>
                        </h2>

                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body">
                                <div class="accordion" id="accordionPanelsStayOpenExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                                CIUDADANÍA Y DERECHOS HUMANOS
                                            </button>
                                        </h2>
                                
                                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                            <div class="accordion-body">
                                                <table class="table table-sm">
                                                    <thead class="table-dark">
                                                        <tr>
                                                            <th scope="col">Sigla</th>
                                                            <th scope="col">Nombre</th>
                                                            <th scope="col">Tipo de curso</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <th></th>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                            


                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                                DESARROLLO LOCAL, TERRITORIALIDAD E INTERCULTURALIDAD
                                            </button>
                                        </h2>
                                    
                                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                            <div class="accordion-body">
                                                <table class="table table-sm">
                                                    <thead class="table-dark">
                                                        <tr>
                                                            <th scope="col">Sigla</th>
                                                            <th scope="col">Nombre</th>
                                                            <th scope="col">Tipo de curso</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <th></th>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                            


                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                                RAKIZUAM EGU KIMÜN/PENSAMIENTO Y CONOCIMIENTO MAPUCHE
                                            </button>
                                        </h2>
                                
                                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                                            <div class="accordion-body">
                                                <table class="table table-sm">
                                                    <thead class="table-dark">
                                                        <tr>
                                                            <th scope="col">Sigla</th>
                                                            <th scope="col">Nombre</th>
                                                            <th scope="col">Tipo de curso</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <th></th>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                                                TEOLOGÍA Y SOCIEDAD
                                            </button>
                                        </h2>
                                
                                        <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
                                            <div class="accordion-body">
                                                <table class="table table-sm">
                                                    <thead class="table-dark">
                                                        <tr>
                                                            <th scope="col">Sigla</th>
                                                            <th scope="col">Nombre</th>
                                                            <th scope="col">Tipo de curso</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <th></th>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingFive">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false" aria-controls="panelsStayOpen-collapseFive">
                                                FILOSOFÍA DE LA PERSONA
                                            </button>
                                        </h2>
                                
                                        <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFive">
                                            <div class="accordion-body">
                                                <table class="table table-sm">
                                                    <thead class="table-dark">
                                                        <tr>
                                                            <th scope="col">Sigla</th>
                                                            <th scope="col">Nombre</th>
                                                            <th scope="col">Tipo de curso</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <th></th>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingSix">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false" aria-controls="panelsStayOpen-collapseSix">
                                                COMPETENCIAS SOCIOEMOCIONALES Y DESARROLLO PERSONAL
                                            </button>
                                        </h2>
                                
                                        <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingSix">
                                            <div class="accordion-body">
                                                <table class="table table-sm">
                                                    <thead class="table-dark">
                                                        <tr>
                                                            <th scope="col">Sigla</th>
                                                            <th scope="col">Nombre</th>
                                                            <th scope="col">Tipo de curso</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <th></th>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingSeven">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSeven" aria-expanded="false" aria-controls="panelsStayOpen-collapseSeven">
                                                EQUIDAD DE GÉNERO PARA NUEVAS SOCIEDADES
                                            </button>
                                        </h2>
                                
                                        <div id="panelsStayOpen-collapseSeven" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingSeven">
                                            <div class="accordion-body">
                                                <table class="table table-sm">
                                                    <thead class="table-dark">
                                                        <tr>
                                                            <th scope="col">Sigla</th>
                                                            <th scope="col">Nombre</th>
                                                            <th scope="col">Tipo de curso</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <th></th>
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
                        </div>
                    </div>



                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                Postular
                            </button>
                        </h2>

                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
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

                                <h4>Estado solicitudes</h4>

                                <table class="table">
                                    <thead class="table-dark">
                                        <tr>
                                            <th scope="col">Código solicitud</th>
                                            <th scope="col">Fecha solicitud</th>
                                            <th scope="col">Estado</th>
                                            <th scope="col">Cod. Carr. Solicitud</th>
                                        </tr>
                                    </thead>
                                        
                                    <tbody>
                                        <tr>
                                            <th></th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>



                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                Mis certificaciones
                            </button>
                        </h2>

                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                            <div class="accordion-body">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </aside>
    </section>
@endsection
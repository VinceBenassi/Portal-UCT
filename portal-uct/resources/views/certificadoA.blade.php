@extends('layouts.app')

@section('titulo', 'Certificado Académico')

@section('contenido')
    <section class="d-sm-flex">
        @include('partials.lateral')


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

                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body">
                                <div class="accordion" id="accordionPanelsStayOpenExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="true" aria-controls="panelsStayOpen-collapseTwo">
                                                CIUDADANÍA Y DERECHOS HUMANOS
                                            </button>
                                        </h2>
                                
                                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                            <div class="accordion-body">
                                                <table class="table table-responsive table-sm">
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
                                                DESARROLLO LOCAL, TERRITORIALIDAD E INTERCULTURALIDAD
                                            </button>
                                        </h2>
                                    
                                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                                            <div class="accordion-body">
                                                <table class="table table-responsive table-sm">
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
                                                RAKIZUAM EGU KIMÜN/PENSAMIENTO Y CONOCIMIENTO MAPUCHE
                                            </button>
                                        </h2>
                                
                                        <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
                                            <div class="accordion-body">
                                                <table class="table table-responsive table-sm">
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
                                                TEOLOGÍA Y SOCIEDAD
                                            </button>
                                        </h2>
                                
                                        <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFive">
                                            <div class="accordion-body">
                                                <table class="table table-responsive table-sm">
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
                                                FILOSOFÍA DE LA PERSONA
                                            </button>
                                        </h2>
                                
                                        <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingSix">
                                            <div class="accordion-body">
                                                <table class="table table-responsive table-sm">
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
                                                COMPETENCIAS SOCIOEMOCIONALES Y DESARROLLO PERSONAL
                                            </button>
                                        </h2>
                                
                                        <div id="panelsStayOpen-collapseSeven" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingSeven">
                                            <div class="accordion-body">
                                                <table class="table table-responsive table-sm">
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
                                        <h2 class="accordion-header" id="panelsStayOpen-headingEight">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseEight" aria-expanded="false" aria-controls="panelsStayOpen-collapseEight">
                                                EQUIDAD DE GÉNERO PARA NUEVAS SOCIEDADES
                                            </button>
                                        </h2>
                                
                                        <div id="panelsStayOpen-collapseEight" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingEight">
                                            <div class="accordion-body">
                                                <table class="table table-responsive table-sm">
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
                        <h2 class="accordion-header" id="panelsStayOpen-headingNine">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseNine" aria-expanded="false" aria-controls="panelsStayOpen-collapseNine">
                                Postular
                            </button>
                        </h2>

                        <div id="panelsStayOpen-collapseNine" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingNine">
                            <div class="accordion-body">
                                <table class="table table-responsive table-sm">
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
                                            <th>203659555</th>
                                            <td>Franco Vincenzo Benassi Cerón</td>
                                            <td>56991749700</td>
                                            <td>fbenassi2019@alu.uct.cl</td>
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



                    <div class="accordion-item mb-3">
                        <h2 class="accordion-header" id="panelsStayOpen-headingTen">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTen" aria-expanded="false" aria-controls="panelsStayOpen-collapseTen">
                                Mis certificaciones
                            </button>
                        </h2>

                        <div id="panelsStayOpen-collapseTen" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTen">
                            <div class="accordion-body">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </aside>
    </section>
@endsection
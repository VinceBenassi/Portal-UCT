@extends('layouts.app')

@section('titulo', 'Solicitudes Estudiantes')

@section('contenido')
    <section class="d-sm-flex">
        @include('partials.lateral')

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


                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                Ingresar Solicitud
                            </button>
                        </h2>

                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
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
                                            <th>21080232-2</th>
                                            <td>Pablo Javier Gomez Quidel</td>
                                            <td>+56953699462</td>
                                            <td>Pgomez2021@uct.cl</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <select class="form-select text-center mb-3" aria-label=".form-select-lg example" data-bs-toggle="collapse" data-bs-target="#collapseBeneficios" aria-expanded="false" aria-controls="collapseWidthExample">
                                    <option selected><strong>Seleccione una Carrera...</strong></option>
                                    <option value="1">154 - Plan: 1 : INGENIERIA CIVIL EN INFORMATICA</option>
                                    <option value="2">154 - Plan: 2 : INGENIERIA CIVIL EN INFORMATICA</option>
                                    <option value="3">154 - Plan: 3 : INGENIERIA CIVIL EN INFORMATICA</option>
                                </select>

                                <div class="collapse text-center" id="collapseBeneficios">
                                    <table class="table table-responsive table-sm">
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

                                    <table class="table table-responsive table-sm">
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

                                    <select class="form-select text-center mb-3" aria-label=".form-select-lg example" data-bs-toggle="collapse" data-bs-target="#collapseRenuncia" aria-expanded="false" aria-controls="collapseWidthExample">
                                        <option selected><strong>Tipo de solicitud..</strong></option>
                                        <option value="1">RENUNCIA</option>
                                        <option value="1">SUSPENCION</option>
                                    </select>

                                    <div class="collapse text-center" id="collapseRenuncia">
                                        <div class="alert alert-primary" role="alert">
                                            <h4 class="alert-heading">Con Beneficio Estudiantil.</h4>
                                            <p>Recordar conversar con la asistente social para informarse de los ajustes de beneficios en los casos de suspensión.</p>
                                        </div>

                                        <section>
                                            <div class="container text-center">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <p class="text-start mb-3">
                                                            <strong>Fecha de Solicitud:</strong>
                                                            02/10/2022
                                                        </p>

                                                        <p class="text-start mb-3">
                                                            <strong>Semestre y Año de la Solicitud:</strong>
                                                            Segundo Semestre de 2022
                                                        </p>

                                                        <p class="text-start mb-1">
                                                            <strong>Desde:</strong>
                                                        </p>

                                                        <p class="card-text col-5">
                                                            <select class="form-select text-center mb-3" aria-label="Default select example">
                                                                <option selected><strong>Semestre..</strong></option>
                                                                <option value="1">Primer Semestre</option>
                                                                <option value="2">Segundo Semestre</option>
                                                            </select>
                                                        </p>
                                                        
                                                        <p class="card-text col-5">
                                                            <select class="form-select text-center mb-3" aria-label="Default select example">
                                                                <option selected><strong>Año..</strong></option>
                                                                <option value="1">2022</option>
                                                            </select>
                                                        </p>
                                                    </div>
                                        
                                                    <div class="col-md-6">
                                                        <p class="text-start mb-1">
                                                            <strong>Motivos:</strong>
                                                        </p>

                                                        <p class="card-text">
                                                            <select id="Motivos" class="form-select text-center mb-3" aria-label="Default select example">
                                                                <option selected><strong>...</strong></option>
                                                                <option value="opc1">ACADEMICO</option>
                                                                <option value="opc2">CAMBIO DE UNIVERSIDAD</option>
                                                                <option value="opc3">CAMBIO INTERNO UCT</option>
                                                                <option value="opc4">DISCONFORMIDAD CARRERA</option>
                                                                <option value="opc5">DISCONFORMIDAD UNIVERSIDAD</option>
                                                                <option value="opc6">ECONOMICOS</option>
                                                                <option value="opc7">HIJOS</option>
                                                                <option value="opc8">OTROS</option>
                                                                <option value="opc9">PERSONALES</option>
                                                                <option value="opc10">SALUD</option>
                                                                <option value="opC11">TRANSTORNO</option>
                                                                <option value="opc12">VOCACION</option>
                                                            </select>

                                                            <div class="Motivos_hide Motivos_opc1">
                                                                <select class="form-select text-center mb-3" aria-label="Default select example">
                                                                    <option selected><strong>...</strong></option>
                                                                    <option>BAJO RENDIMIENTO EN CURSOS DE CIENCIAS BASICAS</option>
                                                                    <option>BAJO RENDIMIENTO EN CURSOS DE LA CARRERA</option>
                                                                    <option>BAJO RENDIMIENTO GENERAL</option>
                                                                    <option>BAJO RENDIMIENTO POR INASISTENCIAS</option>
                                                                </select>
                                                            </div>

                                                            <div class="Motivos_hide Motivos_opc2">
                                                                <select class="form-select text-center mb-3" aria-label="Default select example">
                                                                    <option selected><strong>...</strong></option>
                                                                    <option>CAMBIO DE CARRERA OTRA UNIVERSIDAD</option>
                                                                    <option>CAMBIO MISMA CARRERA OTRA UNIVERSIDAD</option>
                                                                </select>
                                                            </div>

                                                            <div class="Motivos_hide Motivos_opc3">
                                                                <select class="form-select text-center mb-3" aria-label="Default select example">
                                                                    <option selected><strong>...</strong></option>
                                                                    <option>CAMBIO CARRERA UCT</option>
                                                                    <option>REINGRESA MISMA CARRERA VIA PSU UCT</option>
                                                                </select>
                                                            </div>

                                                            <div class="Motivos_hide Motivos_opc4">
                                                                <select class="form-select text-center mb-3" aria-label="Default select example">
                                                                    <option selected><strong>...</strong></option>
                                                                    <option>DISCONFORMIDAD ACADEMICOS</option>
                                                                    <option>DISCONFORMIDAD ATENCION ADMINISTRATIVOS DE LA CARRERA</option>
                                                                    <option>DISCONFORMIDAD CON ITINERARIO FORMATIVO</option>
                                                                    <option>DISCONFORMIDAD GESTION DE LA CARRERA (DIRECTOR)</option>
                                                                    <option>DISCONFORMIDAD INFRAESTRUCTURA</option>
                                                                </select>
                                                            </div>

                                                            <div class="Motivos_hide Motivos_opc5">
                                                                <select class="form-select text-center mb-3" aria-label="Default select example">
                                                                    <option selected><strong>...</strong></option>
                                                                    <option>DISCONFORMIDAD AMBIENTE UNIVERSITARIO</option>
                                                                    <option>DISCONFORMIDAD ATENCION ADMINISTRATIVOS DE LA UNIVERSIDAD</option>
                                                                    <option>DISCONFORMIDAD MOVILIZACIONES ESTUDIANTILES</option>
                                                                    <option>DISCONFORMIDAD TRAMITES BUROCRATICOS</option>
                                                                </select>
                                                            </div>

                                                            <div class="Motivos_hide Motivos_opc6">
                                                                <select class="form-select text-center mb-3" aria-label="Default select example">
                                                                    <option selected><strong>...</strong></option>
                                                                    <option>PROBLEMAS ECONOMICOS</option>
                                                                    <option>PROBLEMAS LABORALES</option>
                                                                </select>
                                                            </div>

                                                            <div class="Motivos_hide Motivos_opc7">
                                                                <select class="form-select text-center mb-3" aria-label="Default select example">
                                                                    <option selected><strong>...</strong></option>
                                                                    <option>CUIDADO DE HIJOS</option>
                                                                    <option>EMBARAZO</option>
                                                                </select>
                                                            </div>

                                                            <div class="Motivos_hide Motivos_opc8">
                                                                <select class="form-select text-center mb-3" aria-label="Default select example">
                                                                    <option selected><strong>...</strong></option>
                                                                    <option>OTROS</option>
                                                                </select>
                                                            </div>

                                                            <div class="Motivos_hide Motivos_opc9">
                                                                <select class="form-select text-center mb-3" aria-label="Default select example">
                                                                    <option selected><strong>...</strong></option>
                                                                    <option>OTROS PROBLEMAS PERSONALES</option>
                                                                    <option>SERVICIO MILITAR</option>
                                                                </select>
                                                            </div>

                                                            <div class="Motivos_hide Motivos_opc10">
                                                                <select class="form-select text-center mb-3" aria-label="Default select example">
                                                                    <option selected><strong>...</strong></option>
                                                                    <option>DISCAPACIDAD</option>
                                                                    <option>PROBLEMAS DE SALUD</option>
                                                                    <option>PROBLEMAS DE SALUD DE FAMILIARES</option>
                                                                    <option>PROBLEMAS DE PSICOLOGICOS Y/O PSIQUIATRICOS</option>
                                                                </select>
                                                            </div>

                                                            <div class="Motivos_hide Motivos_opc11">
                                                                <select class="form-select text-center mb-3" aria-label="Default select example">
                                                                    <option selected><strong>...</strong></option>
                                                                    <option>VOCACION</option>
                                                                </select>
                                                            </div>

                                                            <div class="Motivos_hide Motivos_opc12">
                                                                <select class="form-select text-center mb-3" aria-label="Default select example">
                                                                    <option selected><strong>...</strong></option>
                                                                    <option>TRANSLADO DE CIUDAD</option>
                                                                    <option>TRANSLADO DE PAIS</option>
                                                                    <option>TRANSLADO DE REGION</option>
                                                                </select>
                                                            </div>
                                                            
                                                            
                                                            <script type="text/javascript">
                                                            $('.Motivos_hide').addClass('collapse');
                                                            $('#Motivos').change(function(){
                                                                var selector = '.Motivos_' + $(this).val();
                                                                $('.Motivos_hide').collapse('hide');
                                                                $(selector).collapse('show');
                                                            });
                                                            </script>
                                                            
                                                        </p>
                                                        <a class="btn btn-primary mb-3" href="" role="button">Agregar</a>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <p class="mb-3">
                                                            <a href="#" class="text-decoration-none">Motivo</a>
                                                        </p>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <p class="mb-3">
                                                            <a href="#" class="text-decoration-none">Descripcion</a>
                                                        </p>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <p class="mb-3">
                                                            <a href="#" class="text-decoration-none">Borrar</a>
                                                        </p>
                                                    </div>
                                                </div>
                                                
                                                <p class="text-start mb-3">
                                                    <strong>Detalles Motivos: </strong>
                                                </p>

                                                <form id="feedback_form">
                                                    <textarea class="form-control col-md-8 mb-2 id="t1" maxlength="400" rows="3"> </textarea>
                                                    <label class="mb-3" for="label1">400 caracteres maximos</label>
                                                </form>

                                                <div class="col-md-4">
                                                    <p class="text-start mb-3">
                                                        <a class="btn btn-primary mb-3" href="" role="button">Enviar Solicitud</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="accordion-item mb-3">
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
                                    <table class="table table-responsive table-sm">
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
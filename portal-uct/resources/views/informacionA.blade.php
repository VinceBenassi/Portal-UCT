@extends('layouts.app')

@section('titulo', 'Información Académica')

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
                <h1 class="mb-3">Información Académica</h1>
                
                <p>
                    En esta sección encontrarás información académica: 
                    cursos inscritos, cursos aprobados, cursos reprobados, competencias genéricas y créditos de libre disposición.
                </p>

                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Historia Académica
                            </button>
                        </h2>
                        
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <strong>Información del Estudiante</strong>
                            
                            <table class="table table-sm">
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



                            <strong>Información de la Carrera</strong>
                                
                            <table class="table">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col">Cód. Carrera</th>
                                        <th scope="col">Nombre Carrera</th>
                                        <th scope="col">Plan</th>
                                        <th scope="col">Ingreso</th>
                                        <th scope="col">Registro</th>
                                        <th scope="col">Situación</th>
                                    </tr>
                                </thead>
                                                    
                                <tbody>
                                    <tr>
                                        <th>154</th>
                                        <td>INGENIERÍA CIVIL EN INFORMÁTICA</td>
                                        <td>3</td>
                                        <td>2021</td>
                                        <td>2021011647</td>
                                        <td>REGULAR</td>
                                    </tr>
                                </tbody>
                            </table>


                            <div class="container">
                                <button type="button" class="btn btn-primary">Listado de Cursos</button>
                                <button type="button" class="btn btn-primary">Competencias</button>
                                <button type="button" class="btn btn-primary">Creditos Libre Disposicion</button>
                                <button type="button" class="btn btn-primary">Prueba de Produccion Texto</button>
                                <button type="button" class="btn btn-primary">Avance Curricular</button>
                                <button type="button" class="btn btn-primary">PDF</button>
                            </div>
                        </div>
                    </div>



                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Cursos Inscritos
                            </button>
                        </h2>
                        
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <p>
                                Al seleccionar una carrera se cargará el año y el semestre actual que estas cursando, sin embargo, puedes modificar el año y el semestre para consultar otras cargas académicas. Al hacer click en el boton 'Generar Certificado', se genererá un archivo con extension .PDF que posee toda la información de tus cursos inscritos.
                            </p>
                                        
                            <strong class="mb-3">Seleccione una Carrera:</strong>

                            <select class="form-select text-center" aria-label="Default select example" data-bs-toggle="collapse" data-bs-target="#collapseCarrera" aria-expanded="false" aria-controls="collapseWidthExample">
                                <option selected><strong>Seleccione una Carrera...</strong></option>
                                <option value="1">154 - Plan: 1 : INGENIERIA CIVIL EN INFORMATICA</option>
                                <option value="2">154 - Plan: 2 : INGENIERIA CIVIL EN INFORMATICA</option>
                                <option value="3">154 - Plan: 3 : INGENIERIA CIVIL EN INFORMATICA</option>
                            </select>

                            <div class="collapse text-center" id="collapseCarrera">
                                <h2>Información de la carrera</h2>

                                <table class="table">
                                    <thead class="table-dark">
                                        <tr>
                                            <th scope="col">Cód. Carrera</th>
                                            <th scope="col">Nombre Carrera</th>
                                            <th scope="col">Plan</th>
                                            <th scope="col">Ingreso</th>
                                            <th scope="col">Registro</th>
                                            <th scope="col">Situación</th>
                                        </tr>
                                    </thead>
                                                
                                    <tbody>
                                        <tr>
                                            <th>154</th>
                                            <td>INGENIERÍA CIVIL EN INFORMÁTICA</td>
                                            <td>3</td>
                                            <td>2021</td>
                                            <td>2021011647</td>
                                            <td>REGULAR</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <strong>El siguiente formulario:</strong>

                                <p>
                                    Ingresa un año y/o un semestre, luego haz clic en 'Ver Carga Académica' para ver 
                                    los resultados en pantalla o en 'Generar PDF' para generar un documento el cual podras imprimir.
                                </p>

                                <h4>Carga Académica</h4>

                                <table class="table">
                                    <thead class="table-dark">
                                        <tr>
                                            <th scope="col">Año</th>
                                            <th scope="col">Semestre</th>
                                            <th scope="col">Siglas</th>
                                            <th scope="col">Nombre Curso</th>
                                            <th scope="col">Sección</th>
                                            <th scope="col">Créditos</th>
                                            <th scope="col">Tipo</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <th>2022</th>
                                            <td>2</td>
                                            <td>INFO1116</td>
                                            <td>MANTENCION Y ADMINISTRACION DE SISTEMAS</td>
                                            <td>2</td>
                                            <td>6</td>
                                            <td>MIN</td>
                                        </tr>
                                            
                                        <tr>
                                            <th>2022</th>
                                            <td>2</td>
                                            <td>INFO...</td>
                                            <td>Ramo</td>
                                            <td>2</td>
                                            <td>6</td>
                                            <td>MIN</td>
                                        </tr>

                                        <tr>
                                            <th>2022</th>
                                            <td>2</td>
                                            <td>INFO...</td>
                                            <td>Ramo</td>
                                            <td>2</td>
                                            <td>6</td>
                                            <td>MIN</td>
                                        </tr>

                                        <tr>
                                            <th>2022</th>
                                            <td>2</td>
                                            <td>INFO...</td>
                                            <td>Ramo</td>
                                            <td>2</td>
                                            <td>6</td>
                                            <td>MIN</td>
                                        </tr>
                                                        
                                        <tr>
                                            <th>2022</th>
                                            <td>2</td>
                                            <td>INFO...</td>
                                            <td>Ramo</td>
                                            <td>2</td>
                                            <td>6</td>
                                            <td>MIN</td>
                                        </tr>

                                        <tr>
                                            <th>2022</th>
                                            <td>2</td>
                                            <td>INFO...</td>
                                            <td>Ramo</td>
                                            <td>2</td>
                                            <td>6</td>
                                            <td>MIN</td>
                                        </tr>

                                        <tr>
                                            <th>2022</th>
                                            <td>2</td>
                                            <td>INFO...</td>
                                            <td>Ramo</td>
                                            <td>2</td>
                                            <td>6</td>
                                            <td>MIN</td>
                                        </tr>

                                        <tr>
                                            <th>2022</th>
                                            <td>2</td>
                                            <td>INFO...</td>
                                            <td>Ramo</td>
                                            <td>2</td>
                                            <td>6</td>
                                            <td>MIN</td>
                                        </tr>

                                        <tr>
                                            <th>2022</th>
                                            <td>2</td>
                                            <td>INFO...</td>
                                            <td>Ramo</td>
                                            <td>2</td>
                                            <td>6</td>
                                            <td>MIN</td>
                                        </tr>

                                        <tr>
                                            <th>2022</th>
                                            <td>2</td>
                                            <td>INFO...</td>
                                            <td>Ramo</td>
                                            <td>2</td>
                                            <td>6</td>
                                            <td>MIN</td>
                                        </tr>
                                    </tbody>
                                </table> 
                                

                                
                                <h4>Salas Asignadas</h4>
                                
                                <table class="table table-bordered">
                                    <thead class="table-dark">
                                        <tr>
                                            <th  class="text-start" colspan="6">INFO1116 - MANTENCION Y ADMINISTRACION DE SISTEMAS</th>
                                        </tr>
                                    </thead>
                                                
                                    <tbody>
                                        <tr>
                                            <td>Sección: 3</td>
                                            <td>EB-304</td>
                                            <td>Lunes</td>
                                            <td>13:50 a 17:10</td>
                                            <td>EDIFICIO </td>
                                            <td>CAMPUS SAN JUAN PABLO II</td>
                                        </tr>
                                    </tbody>
                                                
                                    <thead class="table-dark">
                                        <tr>
                                            <th class="text-start" colspan="6">INFO1116 - MANTENCION Y ADMINISTRACION DE SISTEMAS</th>
                                        </tr>
                                    </thead>
                                                
                                    <tbody>
                                        <tr>
                                            <td>Sección: 3</td>
                                            <td>EB-304</td>
                                            <td>Lunes</td>
                                            <td>13:50 a 17:10</td>
                                            <td>EDIFICIO </td>
                                            <td>CAMPUS SAN JUAN PABLO II</td>
                                        </tr>
                                    </tbody>
                                                
                                    <thead class="table-dark">
                                        <tr>
                                            <th class="text-start" colspan="6">INFO1116 - MANTENCION Y ADMINISTRACION DE SISTEMAS</th>
                                        </tr>
                                    </thead>
                                                
                                    <tbody>
                                        <tr>
                                            <td>Sección: 3</td>
                                            <td>EB-304</td>
                                            <td>Lunes</td>
                                            <td>13:50 a 17:10</td>
                                            <td>EDIFICIO </td>
                                            <td>CAMPUS SAN JUAN PABLO II</td>
                                        </tr>
                                    </tbody>
                                                
                                    <thead class="table-dark">
                                        <tr>
                                            <th class="text-start" colspan="6">INFO1116 - MANTENCION Y ADMINISTRACION DE SISTEMAS</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>Sección: 3</td>
                                            <td>EB-304</td>
                                            <td>Lunes</td>
                                            <td>13:50 a 17:10</td>
                                            <td>EDIFICIO </td>
                                            <td>CAMPUS SAN JUAN PABLO II</td>
                                        </tr>
                                    </tbody>
                                                
                                    <thead class="table-dark">
                                        <tr>
                                            <th class="text-start" colspan="6">INFO1116 - MANTENCION Y ADMINISTRACION DE SISTEMAS</th>
                                        </tr>
                                    </thead>
                                                
                                    <tbody>
                                        <tr>
                                            <td>Sección: 3</td>
                                            <td>EB-304</td>
                                            <td>Lunes</td>
                                            <td>13:50 a 17:10</td>
                                            <td>EDIFICIO </td>
                                            <td>CAMPUS SAN JUAN PABLO II</td>
                                        </tr>
                                    </tbody>
                                                
                                    <thead class="table-dark">
                                        <tr>
                                            <th class="text-start" colspan="6">INFO1116 - MANTENCION Y ADMINISTRACION DE SISTEMAS</th>
                                        </tr>
                                    </thead>
                                                
                                    <tbody>
                                        <tr>
                                            <td>Sección: 3</td>
                                            <td>EB-304</td>
                                            <td>Lunes</td>
                                            <td>13:50 a 17:10</td>
                                            <td>EDIFICIO </td>
                                            <td>CAMPUS SAN JUAN PABLO II</td>
                                        </tr>
                                    </tbody>              
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </aside>
    </section>
@endsection
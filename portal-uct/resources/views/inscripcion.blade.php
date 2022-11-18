@extends('layouts.app')

@section('titulo', 'Inscripción de Cursos')

@section('contenido')
    <section class="d-sm-flex">
        @include('partials.lateral')



        <aside class="mx-auto">
            <section class="container text-center">
                <h3 class="mb-3">Inscripción de cursos</h3>

                <p>
                    En esta sección podrás inscribir los cursos del semestre que cursarás este año donde se realizan las clases de tu carrera. 
                    Debes considerar no sobrecargar tu carga académica. 
                    La atención será a través de <b>videollamada</b>, ya que se encuentran <b>suspendidas las atenciones presenciales de forma indefinida</b>.
                </p>

                <div class="accordion mb-3" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                Inscripción de cursos
                            </button>
                        </h2>

                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body text-center">
                                <strong>Información del Estudiante</strong>
                                
                                <table class="table table-responsive table-sm">
                                    <thead class="table-dark">
                                        <tr>
                                            <th scope="col">Carrera</th>
                                            <th scope="col">Nombre de Carrera</th>
                                            <th scope="col">Plan</th>
                                            <th scope="col">Mención</th>
                                            <th scope="col">Estado Acad.</th>
                                        </tr>
                                    </thead>
                                                        
                                    <tbody>
                                        <tr>
                                            <td>154</td>
                                            <td>INGENIERÍA CIVIL EN INFORMÁTICA</td>
                                            <td>3</td>
                                            <td>TECNOLOGÍAS DE LA INFORMACIÓN</td>
                                            <td>MATRICULADO</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <select class="form-select text-center mb-3" aria-label=".form-select-lg example" data-bs-toggle="collapse" data-bs-target="#collapseSemestre" aria-expanded="false" aria-controls="collapseWidthExample">
                                    <option selected><strong>Seleccione un semestre...</strong></option>
                                    <option value="1">Primer semestre</option>
                                    <option value="2">Segundo semestre</option>
                                </select>
                                
                                <div class="collapse text-center" id="collapseSemestre">
                                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                                        <div class="accordion-body">
                                            <div class="accordion" id="accordionPanelsStayOpenExample">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                                            Cursos Académicos
                                                        </button>
                                                    </h2>
                                            
                                                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                                        <div class="accordion-body">
                                                            <table class="table table-responsive table-sm">
                                                                <thead class="table-dark">
                                                                    <tr>
                                                                        <th scope="col">Sigla</th>
                                                                        <th scope="col">Nombre Curso</th>
                                                                        <th scope="col">Unidad que dicta</th>
                                                                        <th scope="col">Sección</th>
                                                                        <th scope="col">Info.</th>
                                                                        <th scope="col">Inscritos</th>
                                                                        <th scope="col">Cupos</th>
                                                                        <th scope="col">Inscribir</th>
                                                                    </tr>
                                                                </thead>

                                                                <tbody>
                                                                    <tr>
                                                                        <th></th>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>
                                                                            <a href="horario" class="btn btn-success mb-3"><i class="fa-solid fa-magnifying-glass"></i></a>
                                                                        </td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>
                                                                            <button type="submit" class="btn btn-secondary"><i class="fa-solid fa-plus"></i></button>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                        


                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                                            Electivo Antropológico Cristiano
                                                        </button>
                                                    </h2>
                                                
                                                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                                                        <div class="accordion-body">
                                                            <table class="table table-responsive table-sm">
                                                                <thead class="table-dark">
                                                                    <tr>
                                                                        <th scope="col">Sigla</th>
                                                                        <th scope="col">Nombre Curso</th>
                                                                        <th scope="col">Unidad que dicta</th>
                                                                        <th scope="col">Sección</th>
                                                                        <th scope="col">Info.</th>
                                                                        <th scope="col">Inscritos</th>
                                                                        <th scope="col">Cupos</th>
                                                                        <th scope="col">Inscribir</th>
                                                                    </tr>
                                                                </thead>

                                                                <tbody>
                                                                    <tr>
                                                                        <th></th>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>
                                                                            <a href="horario" class="btn btn-success mb-3"><i class="fa-solid fa-magnifying-glass"></i></a>
                                                                        </td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>
                                                                            <button type="submit" class="btn btn-secondary"><i class="fa-solid fa-plus"></i></button>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                        


                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                                                            Electivo Teológico
                                                        </button>
                                                    </h2>
                                            
                                                    <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
                                                        <div class="accordion-body">
                                                            <table class="table table-responsive table-sm">
                                                                <thead class="table-dark">
                                                                    <tr>
                                                                        <th scope="col">Sigla</th>
                                                                        <th scope="col">Nombre Curso</th>
                                                                        <th scope="col">Unidad que dicta</th>
                                                                        <th scope="col">Sección</th>
                                                                        <th scope="col">Info.</th>
                                                                        <th scope="col">Inscritos</th>
                                                                        <th scope="col">Cupos</th>
                                                                        <th scope="col">Inscribir</th>
                                                                    </tr>
                                                                </thead>

                                                                <tbody>
                                                                    <tr>
                                                                        <th></th>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>
                                                                            <a href="horario" class="btn btn-success mb-3"><i class="fa-solid fa-magnifying-glass"></i></a>
                                                                        </td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>
                                                                            <button type="submit" class="btn btn-secondary"><i class="fa-solid fa-plus"></i></button>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="panelsStayOpen-headingFive">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false" aria-controls="panelsStayOpen-collapseFive">
                                                            Electivo para la Diversidad
                                                        </button>
                                                    </h2>
                                            
                                                    <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFive">
                                                        <div class="accordion-body">
                                                            <table class="table table-responsive table-sm">
                                                                <thead class="table-dark">
                                                                    <tr>
                                                                        <th scope="col">Sigla</th>
                                                                        <th scope="col">Nombre Curso</th>
                                                                        <th scope="col">Unidad que dicta</th>
                                                                        <th scope="col">Sección</th>
                                                                        <th scope="col">Info.</th>
                                                                        <th scope="col">Inscritos</th>
                                                                        <th scope="col">Cupos</th>
                                                                        <th scope="col">Inscribir</th>
                                                                    </tr>
                                                                </thead>

                                                                <tbody>
                                                                    <tr>
                                                                        <th></th>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>
                                                                            <a href="horario" class="btn btn-success mb-3"><i class="fa-solid fa-magnifying-glass"></i></a>
                                                                        </td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>
                                                                            <button type="submit" class="btn btn-secondary"><i class="fa-solid fa-plus"></i></button>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="panelsStayOpen-headingSix">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false" aria-controls="panelsStayOpen-collapseSix">
                                                            Autorizaciones Especiales
                                                        </button>
                                                    </h2>
                                            
                                                    <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingSix">
                                                        <div class="accordion-body">
                                                            <table class="table table-responsive table-sm">
                                                                <thead class="table-dark">
                                                                    <tr>
                                                                        <th scope="col">Sigla</th>
                                                                        <th scope="col">Nombre Curso</th>
                                                                        <th scope="col">Unidad que dicta</th>
                                                                        <th scope="col">Sección</th>
                                                                        <th scope="col">Info.</th>
                                                                        <th scope="col">Inscritos</th>
                                                                        <th scope="col">Cupos</th>
                                                                        <th scope="col">Inscribir</th>
                                                                    </tr>
                                                                </thead>

                                                                <tbody>
                                                                    <tr>
                                                                        <th></th>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>
                                                                            <a href="horario" class="btn btn-success mb-3"><i class="fa-solid fa-magnifying-glass"></i></a>
                                                                        </td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>
                                                                            <button type="submit" class="btn btn-secondary"><i class="fa-solid fa-plus"></i></button>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="panelsStayOpen-headingSeven">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSeven" aria-expanded="false" aria-controls="panelsStayOpen-collapseSeven">
                                                            Cursos Inscritos
                                                        </button>
                                                    </h2>
                                            
                                                    <div id="panelsStayOpen-collapseSeven" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingSeven">
                                                        <div class="accordion-body">
                                                            <table class="table table-responsive table-sm">
                                                                <thead class="table-dark">
                                                                    <tr>
                                                                        <th scope="col">Sigla</th>
                                                                        <th scope="col">Nombre Curso</th>
                                                                        <th scope="col">Unidad que dicta</th>
                                                                        <th scope="col">Sección</th>
                                                                        <th scope="col">Info.</th>
                                                                        <th scope="col">Inscritos</th>
                                                                        <th scope="col">Cupos</th>
                                                                    </tr>
                                                                </thead>

                                                                <tbody>
                                                                    <tr>
                                                                        <th></th>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>
                                                                            <a href="horario" class="btn btn-success mb-3"><i class="fa-solid fa-magnifying-glass"></i></a>
                                                                        </td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>

                                                <ul class="list-group list-group-flush mb-3">
                                                    <li class="list-group-item">Créditos Disponibles: 3</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </aside>
    </section>
@endsection
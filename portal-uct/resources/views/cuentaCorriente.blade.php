@extends('layouts.app')

@section('titulo', 'Cuenta Corriente')

@section('contenido')
    <section class="d-sm-flex">
        @include('partials.lateral')

        <aside class="mx-auto">
            <div class="text-center">
                <h4>Cuenta Corriente</h4>
                <p>
                    En esta sección encontrarás información de tus cuentas (Deudas, Pagarés, cuotas, etc) y beneficios (Becas y/o Créditos) que posees en la Universidad Católica de Temuco.
                </p>
            </div>



            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Cuenta corriente
                        </button>
                    </h2>

                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body text-center">
                            <p>En esta sección podras consultar el estado de tu cuenta corriente.</p>

                            <strong>Información del Estudiante</strong>
                            
                            <div class="table-responsive">
                                <table class="table table-sm">
                                    <thead class="table-dark">
                                        <tr>
                                            <th scope="col">RUT</th>
                                            <th scope="col">NOMBRE</th>
                                        </tr>
                                    </thead>
                                                        
                                    <tbody>
                                        <tr>
                                            <th>203659555</th>
                                            <td>Franco Vincenzo Benassi Cerón</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <h3>Estado de cuotas cuenta corriente</h3>

                            <h4>Todas las cuotas</h4>

                            <select class="form-select text-center mb-3" aria-label="Default select example">
                                <option selected><strong>Seleccione Estado...</strong></option>
                                <option value="1">""</option>
                                <option value="2">""</option>
                                <option value="3">""</option>
                            </select>

                            <select class="form-select text-center mb-3" aria-label="Default select example">
                                <option selected><strong>Seleccione concepto...</strong></option>
                                <option value="1">""</option>
                                <option value="2">""</option>
                                <option value="3">""</option>
                            </select>

                            <button type="submit" class="btn btn-success mb-3">Filtrar datos</button>

                            <div class="table-responsive">
                                <table class="table table-sm">
                                    <thead class="table-dark">
                                        <tr>
                                            <th scope="col">Carrera</th>
                                            <th scope="col">Año N°Cuota</th>
                                            <th scope="col">Concepto</th>
                                            <th scope="col">Valor Cuota</th>
                                            <th scope="col">Abono</th>
                                            <th scope="col">Monto a Pagar</th>
                                            <th scope="col">Fecha Vcto.</th>
                                            <th scope="col">Estado</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <th>""</th>
                                            <td>""</td>
                                            <td>""</td>
                                            <td>""</td>
                                            <td>""</td>
                                            <td>""</td>
                                            <td>""</td>
                                            <td>""</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
                


                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Pago con Webpay plus
                        </button>
                    </h2>

                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body text-center">
                            <strong>Información del Estudiante</strong>
                            
                            <div class="table-responsive">
                                <table class="table table-sm">
                                    <thead class="table-dark">
                                        <tr>
                                            <th scope="col">RUT</th>
                                            <th scope="col">NOMBRE</th>
                                        </tr>
                                    </thead>
                                                            
                                    <tbody>
                                        <tr>
                                            <th>203659555</th>
                                            <td>Franco Vincenzo Benassi Cerón</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            

                            <a href="https://pagos.uct.cl/web_pay_uct/trunk/" target="_blank" rel="noopener noreferrer">
                                <img src="images/Logo webpay.png" class="img-fluid" alt="webpay">
                            </a>
                        </div>
                    </div>
                </div>



                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Beneficios estudiantiles
                        </button>
                    </h2>

                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body text-center">
                            <strong>Información del Estudiante</strong>      
                            
                            <div class="table-responsive">
                                <table class="table table-sm">
                                    <thead class="table-dark">
                                        <tr>
                                            <th scope="col">RUT</th>
                                            <th scope="col">NOMBRE</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <tr>
                                            <th>203659555</th>
                                            <td>Franco Vincenzo Benassi Cerón</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                            <h3>Información de beneficios</h3>

                            <div class="table-responsive">
                                <table class="table table-sm">
                                    <thead class="table-dark">
                                        <tr>
                                            <th scope="col">Año</th>
                                            <th scope="col">Descripcion</th>
                                            <th scope="col">Monto</th>
                                            <th scope="col">Estado</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <th>""</th>
                                            <td>""</td>
                                            <td>""</td>
                                            <td>""</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>



                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                            Crédito complementario
                        </button>
                    </h2>

                    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body text-center">
                            <p>En esta sección podras consultar el estado de tus cuotas (PAGADA, VIGENTE) de tu crédito complementario.</p>

                            <strong>Información del Estudiante</strong>
                            
                            <div class="table-responsive">
                                <table class="table table-sm">
                                    <thead class="table-dark">
                                        <tr>
                                            <th scope="col">RUT</th>
                                            <th scope="col">NOMBRE</th>
                                        </tr>
                                    </thead>
                                                        
                                    <tbody>
                                        <tr>
                                            <th>203659555</th>
                                            <td>Franco Vincenzo Benassi Cerón</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <select class="form-select text-center mb-3" aria-label="Default select example">
                                <option selected><strong>Seleccione un año...</strong></option>
                                <option value="1">""</option>
                                <option value="2">""</option>
                                <option value="3">""</option>
                            </select>

                            <h3>Cuotas crédito complementario</h3>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="table-dark">
                                        <tr>
                                            <th scope="col">Imprimir</th>
                                            <th scope="col">Año</th>
                                            <th scope="col">Numero</th>
                                            <th scope="col">Fecha Vcto.</th>
                                            <th scope="col">Cuota</th>
                                            <th scope="col">Estado</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <th>""</th>
                                            <td>""</td>
                                            <td>""</td>
                                            <td>""</td>
                                            <td>""</td>
                                            <td>""</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <button type="submit" class="btn btn-primary">Imprimir talonario</button>
                        </div>
                    </div>
                </div>



                <div class="accordion-item mb-3">
                    <h2 class="accordion-header" id="flush-headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                            Emisión de documentos
                        </button>
                    </h2>

                    <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body text-center">
                            <strong>Información del Estudiante</strong>
                            
                            <div class="table-responsive">
                                <table class="table table-sm">
                                    <thead class="table-dark">
                                        <tr>
                                            <th scope="col">RUT</th>
                                            <th scope="col">NOMBRE</th>
                                        </tr>
                                    </thead>
                                                        
                                    <tbody>
                                        <tr>
                                            <th>203659555</th>
                                            <td>Franco Vincenzo Benassi Cerón</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="alert alert-warning" role="alert">
                                <h4 class="alert-heading"><b>¡Aviso!</b> La emisión de pagarés de pregrado no estará disponible hasta nuevo aviso.</h4>
                            </div>

                            <h3>Pagaré beneficios</h3>

                            <p>En esta sección encontrarás todos los Pagarés vigentes, los cuales debes imprimir y hacerlos llegar a las oficinas de cobranza en el campus correspondiente a tu carrera.</p>

                            <strong>Información de la carrera</strong>

                            <div class="table-responsive">
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
                                            <th>""</th>
                                            <td>""</td>
                                            <td>""</td>
                                            <td>""</td>
                                            <td>""</td>
                                            <td>""</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <strong>Pagarés vigentes</strong>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="table-dark">
                                        <tr>
                                            <th scope="col">Año</th>
                                            <th scope="col">Descripcion</th>
                                            <th scope="col">Monto</th>
                                            <th scope="col">Estado</th>
                                            <th scope="col">imprimir</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <th>""</th>
                                            <td>""</td>
                                            <td>""</td>
                                            <td>""</td>
                                            <td>""</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <h3>Certificados de pago matrícula - arancel</h3>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="table-dark">
                                        <tr>
                                            <th scope="col">Documentos disponibles:</th>
                                            <th scope="col">Máximo un certificado para cada documento.</th>
                                        </tr>
                                    </thead>
                                                    
                                    <tbody>
                                        <tr>
                                            <th>No hay documentos disponible</th>
                                            <td>""</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </aside>
    </section>
@endsection
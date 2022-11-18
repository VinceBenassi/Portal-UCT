<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('titulo') - Universidad Católica de Temuco</title>
        <link rel="icon" href="{{ asset('images/iconoUCT.png') }}">
        <link href='https://fonts.googleapis.com/css?family=Noto+Sans+SC' rel='stylesheet' type='text/css'>
        <script src="../js/sweetalert2.all.min.js"></script>

        <!-- Los iconos tipo Solid de Fontawesome-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

        <!-- Bootstrap Datapiker-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/locales/bootstrap-datepicker.es.min.js" charset="UTF-8"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker3.css"/>

        <style>
        
        #lateral { 
            background-color: #00568e;
        }

        /*
        #home-tab{
            color: black;
        }

        #profile-tab{

        }
        */
        
            /* Navegación modo oscuro*/
            body.darkmode {
                background-color: #1f1f1f;
                color: white;
            }
            
            .darkmode #lateral {
                background-color: #1c1c1c;
            }

            .darkmode .navbar {
                background-color: #1c1c1c;
            }

            .darkmode footer {
                background-color: #1c1c1c;
                color: white;
            }

            .darkmode article a {
                background-color: #1c1c1c;
                color: white;
            }

            .darkmode .nav-link {
                color: lightgrey;
            }

            .darkmode .card {
                background-color: #3c3939;
                color: white;
            }

            .darkmode .btn-outline {
                background-color: white;
                color: black;
            }

            .darkmode label {
                color: white;
            }

            .darkmode table {
                color: white;
            }

            .darkmode tbody {
                color: white;
            }

            .darkmode label[for=floatingInput],
            label[for=floatingPassword] {
                color: black;
            }

            .darkmode div{
                color: white;
            }
            .darkmode .accordion-item{
                background-color: #3c3939;
            }
            .darkmode .accordion-button{
                background-color: #3c3939;
                color: white;
            }
            .darkmode .alert{
                color: black;
            }
            
            



            /* Navegación Fondo Blanco */
            body {
                transition: all 0.4s;    
            }

            .navbar {
                background-color: #00568e;
            }

            footer {
                background-color: #00568e;
                color:white /*#cda52b*/;
            }

            article a {
                background-color:#00568e;
                color: #ffc20e;
                text-decoration: none;
            }

            #Barra_superior_1 {
                color: white/*#e1bd4f*/;
            }
            #Barra_superior_2 {
                color: white/*#e1bd4f*/;
            }
            #Barra_superior_3 {
                color: white/*#e1bd4f*/;
            }
            #Barra_superior_4 {
                color: white/*#e1bd4f*/;
            }
            #Barra_superior_5 {
                color: white/*#e1bd4f*/;
            }
            #Barra_superior_6 {
                color: white/*#e1bd4f*/;
            }
            #Barra_superior_7 {
                color: white/*#e1bd4f*/;
            }
            #Barra_superior_8 {
                color: white/*#e1bd4f*/;
            }
            #Barra_superior_9 {
                color: white/*#e1bd4f*/;
            }
            #Barra_superior_10 {
                color: white/*#e1bd4f*/;
            }

            .card {
                width: 100%;
                margin: 0 auto;
                
            }

            .btn-outline {
                background-color: lightgrey;
                color: black;
            }

            h3 {
                font-family: 'Noto Sans SC', sans-serif;
                font-weight: bold;
            }

            .acad{
                display: inline;
            }

            .nav-item{
                color: black;
            }

        </style>
    </head>


    <!-- Cuerpo principal -->
    <body>
        <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid">
                <a class="navbar-brand" href="https://www.uct.cl/" target="_blank" rel="noopener noreferrer">
                    <img src="images/iconoUCT.png" alt="UCT" width="30" height="30">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" id="Barra_superior_1" href="https://educa.blackboard.com/" target="_blank" rel="noopener noreferrer"><i class="fa-solid fa-square-pen"></i> EDUCA BLACKBOARD</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="Barra_superior_2" href="https://webmail.uct.cl/" target="_blank" rel="noopener noreferrer"><i class="fa-solid fa-envelope"></i> WEBMAIL</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="Barra_superior_3" href="https://directorio.uct.cl/" target="_blank" rel="noopener noreferrer"><i class="fa-solid fa-users"></i> DIRECTORIO</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="Barra_superior_4" href="https://secretariageneral.uct.cl/" target="_blank" rel="noopener noreferrer"><i class="fa-solid fa-lock"></i> INTRANET</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="Barra_superior_5" href="https://vip.uct.cl/posgrado/" target="_blank" rel="noopener noreferrer"><i class="fa-solid fa-graduation-cap"></i> POSGRADO</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="Barra_superior_6" href="https://tuct.uctemuco.cl/" target="_blank" rel="noopener noreferrer"><i class="fa-solid fa-id-card"></i> CREDENCIAL</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="Barra_superior_7" href="https://admision.uct.cl/" target="_blank" rel="noopener noreferrer"><i class="fa-solid fa-hand-pointer"></i> ADMISIÓN</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="Barra_superior_8" href="https://dge.uct.cl/" target="_blank" rel="noopener noreferrer"><i class="fa-solid fa-building-columns"></i> DGE</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" id="Barra_superior_9" href="https://www.uct.cl/calendario-academico/" target="_blank" rel="noopener noreferrer"><i class="fa-regular fa-calendar"></i> CALENDARIO</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="Barra_superior_10" href="https://www.uct.cl/centro-de-ayuda/" target="_blank" rel="noopener noreferrer"><i class="fa-solid fa-address-book"></i> CONTACTO</a>
                        </li>
                    </ul>

                    <div>
                        <button id="bdark" class="btn btn-outline" onclick="modoOscuro()">Modo Oscuro</button>
                        <a href="https://www.facebook.com/canaluctemuco?ref=hl" class="btn btn-outline mr-2" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i> </a>
                        <a href="https://twitter.com/UC_Temuco" class="btn btn-outline" target="_blank" rel="noopener noreferrer"> <i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/uctemuco/?hl=es-la" class="btn btn-outline" target="_blank" rel="noopener noreferrer"> <i class="fab fa-instagram"></i> </a>
                        <a href="https://www.youtube.com/user/canaluctemuco" class="btn btn-outline" target="_blank" rel="noopener noreferrer"> <i class="fa-brands fa-youtube"></i> </a>
                        <a href="https://www.flickr.com/photos/uc_temuco/sets/" class="btn btn-outline" target="_blank" rel="noopener noreferrer"> <i class="fa-brands fa-flickr"></i></a>
                    </div>
                </div>
            </div>
        </nav>



        @yield('contenido')



        <!-- Pie de página -->
        <footer class="footer-texto">
            <div class="pt-5 pb-5 footer">
                <div class="container">

                    <!-- Bot de Ayuda -->
                    <script> 
                        (function(b,c){var e=document.createElement('link');
                        e.rel='stylesheet',e.type='text/css',
                        e.href='https://chatboxlive.blahbox.net/static/css/main.css',
                        document.getElementsByTagName('head')[0].appendChild(e); 
                        var f=document.createElement('script');
                        f.onload=function(){var g;if(c)g='previewInit';
                        else{var h=document.createElement('div');
                        g='cbinit',
                        h.id='cbinit',
                        document.body.append(h)} console.log(document.querySelector('#'+g)),
                        chatbox.initChat(document.querySelector('#'+g),b,c)},
                        f.src='https://chatboxlive.blahbox.net/static/js/chat-lib.js',
                        document.getElementsByTagName('head')[0].appendChild(f)}) ('8202e2b4d740d6ac29fbf48fa7843790', 0);
                    </script>
                    <!-- Bot de Ayuda -->



                    <div class="row">
                        <div class="col-sm-3">
                            <p class="footer-widget">
                                <h4>CAMPUS SAN FRANCISCO</h4>
                                <ul>
                                    <li>
                                        <i class="fa-solid fa-location-dot"></i> Manuel Montt 56
                                    </li>

                                    <li>
                                        <i class="fa fa-phone mr-3"></i> +56 45 2 205 470
                                    </li>
                                </ul>
                            </p>

                            <p class="pr-5 text-black-50">
                                <h4>CAMPUS SAN JUAN PABLO II</h4>
                                <ul>
                                    <li>
                                        <i class="fa-solid fa-location-dot"></i> Rudecindo Ortega 02950
                                    </li>

                                    <li>
                                        <i class="fa fa-phone mr-3"></i> +56 45 2 553 978
                                    </li>
                                </ul>
                            </p>
                        </div>

                        <div class="col-sm-3">
                            <p class="footer-widget text-black-50">
                                <h4>CAMPUS MENCHACA LIRA</h4>
                                <ul>
                                    <li>
                                        <i class="fa-solid fa-location-dot"></i> Avenida Alemania 0422
                                    </li>

                                    <li>
                                        <i class="fa fa-phone mr-3"></i> +56 45 2 203 822
                                    </li>
                                </ul>
                            </p>

                            <p class="pr-5 text-black-50">
                                <h4>CAMPUS LUIS RIVAS DEL CANTO</h4>
                                <ul>
                                    <li>
                                        <i class="fa-solid fa-location-dot"></i> Callejón Las Mariposas s/n
                                    </li>

                                    <li>
                                        <i class="fa fa-phone mr-3"></i> +56 45 2 205 596
                                    </li>
                                </ul>
                            </p>
                        </div>

                        <div class="col-sm-3">
                            <p class="footer-widget text-black-50">
                                <h4>PRENSA INSTITUCIONAL</h4>
                                <ul>
                                    <li>
                                        <i class="fa-solid fa-location-dot"></i> Avenida Alemania 0211
                                    </li>

                                    <li>
                                        <i class="fa fa-phone mr-3"></i> +56 45 2 205 428
                                    </li>
                                </ul>
                            </p>

                            <p class="pr-5 text-black-50">
                                <h4>BIENESTAR ESTUDIANTIL</h4>
                                <ul>
                                    <li>
                                        <i class="fa-solid fa-location-dot"></i> Manuel Montt 56
                                    </li>

                                    <li>
                                        <i class="fa fa-phone mr-3"></i> +56 45 2 205 424
                                    </li>
                                </ul>
                            </p>
                        </div>

                        <div class="col-sm-3">
                            <p class="footer-widget text-black-50">
                                <h4>AULA MAGNA</h4>
                                <ul>
                                    <li>
                                        <i class="fa-solid fa-location-dot"></i> Manuel Montt 56
                                    </li>

                                    <li>
                                        <i class="fa fa-phone mr-3"></i> +56 45 2 205 471
                                    </li>
                                </ul>
                            </p>

                            <p class="pr-5 text-black-50">
                                <h4>MESA CENTRAL</h4>
                                <ul>
                                    <li>
                                        <i class="fa-solid fa-location-dot"></i> Prieto Norte 371
                                    </li>

                                    <li>
                                        <i class="fa fa-phone mr-3"></i> +56 45 2 205 205
                                    </li>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Copyright -->
            <div class="text-center p-4">
                © Portal del Estudiante es un proyecto realizado por la Dirección de Informática UCTemuco.
                Soporte, comentarios, errores reportarlos al correo: soportesistemas@uct.cl.
            </div>
            <!-- Copyright -->
        </footer>



        <script>
            // Script encargado de devolver la alerta según el valor que tenga el input oculto de id "estado"
            $(document).ready(function() {
                var estado = document.getElementById("estado").value;
                // En caso de error arroja una alerta de error y vuelve a la vista inicio
                if (estado == 'error'){
                    Swal.fire({
                        icon: 'error',
                        title: 'Los datos ingresados no son válidos',
                        showConfirmButton: false,
                        timer: 2000,
                    })
                }
                else{
                // En caso de exito arroja una alerta de success y retorna la vista de inicio
                    Swal.fire({
                        icon: 'success',
                        title: 'Ha iniciado sesión con éxito',
                        showConfirmButton: false,
                        timer: 4500,
                    }).then(function(){
                        window.location.href = "/";
                    });
                }          
            });

            // Esta función evita colocar letras en el input del RUN
            function validate(evt) {
                var theEvent = evt || window.event;
                if (theEvent.type === 'paste') {
                    key = event.clipboardData.getData('text/plain');
                } else {
                    var key = theEvent.keyCode || theEvent.which;
                    key = String.fromCharCode(key);
                }

                var regex = /[0-9]/;

                if (!regex.test(key)) {
                    theEvent.returnValue = false;
                    if (theEvent.preventDefault) theEvent.preventDefault();
                }
            }


            // Mediante esta función nos aseguramos que los números telefónicos ingresados en ambos campos asigandos a esta tarea
            // sean iguales para así validar este dato 
            function checkNum() {
                var tel1 = document.getElementById("tel1").value;
                var tel2 = document.getElementById("tel2").value;
                var button = document.getElementById("buttonSub");
                var error = document.getElementById("error");

                // En nuestra condicional nos aseguramos que estos datos coincidan
                if (tel1 != tel2) {
                    button.disabled = true;
                    error.textContent = "Los números no coinciden.";
                    error.style.color = "red";
                }

                // Dado que si no es el caso arroje un error debajo de la etiqueta label para que el usuario sea capaz de verla
                else {
                    button.disabled = false;
                    error.textContent = '';
                }
            }


            // Modo Oscuro
            function modoOscuro() {
                const bdark = document.querySelector('#bdark');
                const body = document.querySelector('body');

                load();

                bdark.addEventListener('click', e => {
                    body.classList.toggle('darkmode');
                    store(body.classList.contains('darkmode'));
                });

                // Ver si existe o no el valor del modo oscuro
                function load() {
                    const darkmode = localStorage.getItem('darkmode');

                    if (!darkmode) {
                        store('false');
                    } else if (darkmode == 'true') {
                        body.classList.add('darkmode');
                    }
                }

                // Guardar el valor
                function store(value) {
                    localStorage.setItem('darkmode', value);
                }
            }

        
        </script>
    </body>
</html>
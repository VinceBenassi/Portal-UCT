@extends('layouts.app')

@section('titulo', 'Inicio')

@section('contenido')
    <section>
        <h3 class="text-center">Iniciar sesión</h3>
            
        <article class="container">
            <form action="{{route('inicio')}}" method="POST" class="form-inline row justify-content-center g-3" name="frm1" onload="setValue()">
                @csrf
                <div class="form-floating col-lg-3 run">
                    <input value="@if(Session::has('rut_nro')){{ Session::get('rut_nro')}}@endif" class="form-control input-sm" id="floatingInput rut" onpaste="return false;" ondrop="return false;" inputmode="numeric" onkeypress='validate(event)' class="form-control form-control-lg" size=9 minlength="7" maxlength="9" type="text" pattern="[0-9]+" name="rut" id="rut" placeholder="N° RUN" oninput="checkRut()">
                    <label for="floatingInput">RUN sin puntos ni guión</label>
                </div>
                    
                <div class="form-floating col-lg-3">
                    <input value="@if(Session::has('contra')){{ Session::get('contra')}}@endif" type="password" class="form-control input-sm" id="floatingPassword contra" onpaste="return false;" ondrop="return false;"  name="contra" placeholder="Contraseña" required>
                    <label for="floatingPassword">Contraseña</label>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-success mb-3">Ingresar <i class="fa-solid fa-right-to-bracket"></i></button> 
                    <a href="cambiar" type="submit" class="btn btn-secondary mb-3" target="_blank" rel="noopener noreferrer">Cambiar contraseña</a>
                    <a href="recuperar" type="submit" class="btn btn-secondary mb-3" target="_blank" rel="noopener noreferrer">Recuperar contraseña</a>
                </div>
            </form>
        </article>

        <aside> <!-- Apartado para la publicidad de la Universidad-->
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
                </div>
  
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/31.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Campus San Juan Pablo II</h5>
                            <p>Vista a la entrada del edificio cincuentenario.</p>
                        </div>
                    </div>
    
                    <div class="carousel-item">
                        <img src="images/4.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Campus San Francisco</h5>
                            <p>Vista a la entrada principal del campus.</p>
                        </div>                           
                    </div>
    
                    <div class="carousel-item">
                        <a href="https://pdi.uct.cl/ciclo-charlas-de-futuro/" target="_blank" rel="noopener noreferrer">
                            <img src="images/BANNER_CHARLAS-23.jpg" class="d-block w-100" alt="...">
                        </a>
                    </div>

                    <div class="carousel-item">
                        <a href="https://pdi.uct.cl/ciclo-charlas-de-futuro/" target="_blank" rel="noopener noreferrer">
                            <img src="images/BANNER_CHARLAS-25.jpg" class="d-block w-100" alt="...">
                        </a>
                    </div>

                    <div class="carousel-item">
                        <a href="https://pdi.uct.cl/" target="_blank" rel="noopener noreferrer">
                            <img src="images/banners.png" class="d-block w-100" alt="...">
                        </a>
                    </div>

                    <div class="carousel-item">
                        <img src="images/slider-felipe.jpg" class="d-block w-100" alt="...">                         
                    </div>
                </div>
  
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
  
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Siguiente</span>
                </button>
            </div>
        </aside>
    </section>
@endsection
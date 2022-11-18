@extends('layouts.app')

@section('titulo', 'Menú')

@section('contenido')
    <!-- Funciones generales -->
    <section class="d-sm-flex">
        @include('partials.lateral')


        <aside class="mx-auto col-md-4">
            <div class="card text-center mb-3">
                @foreach($usuarios as $usuario)
                    <img src="fotos/{{ $usuario->Imagen }}" height="400" class="card-img-top" alt="...">
                    
                    <div class="card-body">
                        <h5 class="card-title">Bienvenido/a {{ $usuario->Nombres }} {{ $usuario->ApellidoP }}</h5>
                            
                        <p class="card-text"> Estimado/a Estudiante
                            Para mantenernos en contacto y brindarte una mejor atención sobre tus beneficios estudiantiles, 
                            te invitamos a actualizar tus datos personales aquí:
                        </p>
                    </div>

                    <ul class="list-group list-group-flush mb-3">
                        <li class="list-group-item">Rut: {{ $usuario->Run }}</li>
                        <li class="list-group-item">Nombres: {{ $usuario->Nombres }}</li>
                        <li class="list-group-item">Apellido paterno: {{ $usuario->ApellidoP }}</li>
                        <li class="list-group-item">Apellido materno: {{ $usuario->ApellidoM }}</li>
                        <li class="list-group-item">Fecha de nacimiento: {{ $usuario->Fecha_Nac }}</li>
                        <li class="list-group-item">Sexo: {{ $usuario->Sexo }}</li>
                        <li class="list-group-item">E-mail UCTemuco: {{ $usuario->Correo }}</li>
                    </ul>
                @endforeach

                
                
                <form action="{{route('inicio')}}">
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

                    <button type="submit" id="buttonSub" class="btn btn-success mb-3">Grabar</button>
                </form>
            </div>
        </aside>
    </section>
@endsection
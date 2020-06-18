@extends('layout')
@section('title')
Formulario Registro Estudiante
@endsection
{{-- PARA INGRESAR EL FORMULARIO --}}

@auth
<h3>Bienvenid@ {{auth()->user()->name}} </h3> 
@endauth

@section('content')


<div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">

                <section class="formulario">
<form class=" shadow rounded py-3 px-4" name="registroEstudianteForm" id="registroEstudianteForm" method="POST" action="{{route('estudiantes.store')}}">
    @csrf

        <h1>@lang('Registro Estudiantes')</h1>
         <hr>
    <div class="form-group">
        <label for="ci">Carnet de Identidad: </label>
        <input class="form-control bg-light shadow-sm
        @error('ci') is-invalid @else border-0 @enderror"
        type="text"
         name="ci" 
         id="ci"
          placeholder="Ingrese el carnet de identidad" 
          value="{{old('ci')}}">
            @error('ci')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>   
            @enderror

    </div>

    <div class="form-group">
        <label for="nombre">Nombre: </label>
        <input class="form-control bg-light shadow-sm  @error('ci') is-invalid @else border-0 @enderror"
        type="text"
         name="nombre" 
         id="nombre" 
         placeholder="Ingrese el nombre del estudiante" 
         value="{{old('nombre')}}"/>
             @error('nombre')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>   
            @enderror
    </div>
    <div class="form-group">
        <label for="apellido">Apellido: </label>
        <input class="form-control bg-light shadow-sm  @error('ci') is-invalid @else border-0 @enderror"
        type="text" 
        name="apellido" 
        id="apellido"
         placeholder="Ingrese el apellido del estudainte"
          value="{{old('apellido')}}"/>
            @error('apellido')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>   
            @enderror
    </div>
    <div class="form-group">
        <label for="correo">Correo Electronico: </label>
        <input class="form-control bg-light shadow-sm  @error('ci') is-invalid @else border-0 @enderror"
        type="email" 
        name="correo" 
        id="correo" 
        placeholder="Ingrese el correo del estudiante"
         value="{{old('correo')}}"/>
             @error('correo')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>   
            @enderror
    </div>



    <div>
        <button class="btn btn-primary btn-block btn-lg" id="idSubmit" name="idSubmit" type="submit">Registrar</button>
    </div>
</form>
</section>

            </div>
        </div>





</div>



@endsection
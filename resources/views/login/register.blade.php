@extends('layouts.plantilla')
@section('title',"Registro de Usuario") 
@section('content')

<h1> REGISTRO </h1>

    <div class="row g-3 align-items-center">
        <div class="col-auto">
            <label for="NombreUsuario" class="col-form-label">Nombre :</label>
        </div>
        <div class="col-auto">
            <input type="text" id="NombreUsuario" class="form-control" name="NombreUsuario" style="width: 300px; text-align: center;">
        </div>
    
    <div class="row g-3 align-items-center">
        <div class="col-auto">
            <label for="Apellidos" class="col-form-label">Apellidos :</label>
        </div>
        <div class="col-auto">
            <input type="text" id="Apellidos" class="form-control" name="Apellidos" style="width: 300px; text-align: center;">
        </div>


    <div class="row g-3 align-items-center">
        <div class="col-auto">
            <label for="FecNacimiento" class="col-form-label">Fecha de Nacimiento :</label>
        </div>
        <div class="col-auto">
            <input type="text" id="FecNacimiento" class="form-control" name="FecNacimiento" style="width: 300px; text-align: center;">
        </div>

    
    <div class="row g-3 align-items-center">
        <div class="col-auto">
            <label for="email" class="col-form-label">Correo Electornico :</label>
        </div>
        <div class="col-auto">
            <input type="text" id="email" class="form-control" name="email" style="width: 300px; text-align: center;">
        </div>   

            
    <div class="row g-3 align-items-center">
        <div class="col-auto">
            <label for="password" class="col-form-label">Contraseña :</label>
        </div>
        <div class="col-auto">
            <input type="text" id="password" class="form-control" name="pasword" style="width: 300px; text-align: center;">    
        </div>  

    <div class="row g-3 align-items-center">
        <div class="col-auto">
            <label for="Validation" class="col-form-label">Confirmar Contraseña :</label>
        </div>
        <div class="col-auto">
            <input type="text" id="validation" class="form-control" name="validation" style="width: 300px; text-align: center;">

        </div><br>
      <a href="/login" class="btn btn-primary">iniciar</a>

      </div> 

@endsection
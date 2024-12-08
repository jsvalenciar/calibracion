@extends('layouts.plantilla')
@section('title',"Index de productos")
@section('content')

<h1> REGISTRO </h1>

    <div class="row g-3 align-items-center">
        <div class="col-auto">
            <label for="NombreUsuario" class="col-form-label">Nombre</label>
        </div>
        <div class="col-auto">
            <input type="text" id="NombreUsuario" class="form-control" name="NombreUsuario" style="width: 300px; text-align: center;">
        </div>
    
    <div class="row g-3 align-items-center">
        <div class="col-auto">
            <label for="Apellidos" class="col-form-label">Apellidos</label>
        </div>
        <div class="col-auto">
            <input type="text" id="Apellidos" class="form-control" name="Apellidos" style="width: 300px; text-align: center;">
        </div>
    
    <div class="row g-3 align-items-center">
        <div class="col-auto">
            <label for="Correo" class="col-form-label">Correo</label>
        </div>
        <div class="col-auto">
            <input type="text" id="Correo" class="form-control" name="Correo" style="width: 300px; text-align: center;">
        </div>   
    
    <div class="row g-3 align-items-center">
        <div class="col-auto">
            <label for="FecNacimiento" class="col-form-label">Fecha de Nacimiento</label>
        </div>
        <div class="col-auto">
            <input type="text" id="FecNacimiento" class="form-control" name="FecNacimiento" style="width: 300px; text-align: center;">
        </div><br>
      <a href="{{route("products.create")}}"class="button is-link is-light">voler 🔚</a>
      </div> 

@endsection
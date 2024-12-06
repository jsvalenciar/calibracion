@extends('layouts.plantilla')
@section('title',"Index de productos")
@section('content')

<h1> Inicio de Sesion </h1>

    <div class="row g-3 align-items-center">
        <div class="col-auto">
            <label for="NombreUsuario" class="col-form-label">Usuario</label>
        </div>
        <div class="col-auto">
            <input type="text" id="NombreUsuario" class="form-control" name="NombreUsuario" style="width: 300px; text-align: center;">
        </div>
    
    <div class="row g-3 align-items-center">
        <div class="col-auto">
            <label for="Contraseña" class="col-form-label">Contraseña</label>
        </div>
        <div class="col-auto">
            <input type="text" id="Contraseña" class="form-control" name="Contraseña" style="width: 300px; text-align: center;">
        </div>
    <a href="/products" class="btn btn-primary">inicio</a>

@endsection


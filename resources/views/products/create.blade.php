@extends('layouts.plantilla')
@section('title',"Index de productos")
@section('content')


                                       <!-- ESTA VA A SER LA PAGINA PARA CREAR LOS CLIENTES -->
 
    <div class="container mt-5">
        <h4 class="text-center mb-4"> CREAR CLIENTES</h4>
        <form action="{{route("products.store")}}" method="POST">
            @csrf

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="name">Nombe de la Empresa</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Nombre de la Empresa">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="code">NIT</label>
                    <input type="text" name="code" id="name" class="form-control" placeholder="NIT">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="email">Correo</label>
                    <input type="text" name="email" id="email" class="form-control" placeholder="Correo Electornico">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="address">Direccion</label>
                    <input type="text" name="address" id="address" class="form-control" placeholder="Direccion">
                </div>
            </div>
            <div class="text-center mt-4">
            <button class="btn btn-outline-primary"> Crear</button>
        </form>
    @endsection
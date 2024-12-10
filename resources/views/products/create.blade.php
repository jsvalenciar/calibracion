@extends('layouts.plantilla')
@section('title',"Crear nuevo Cliente")
@section('content')


                                       <!-- ESTA VA A SER LA PAGINA PARA CREAR LOS CLIENTES -->

    <div class="container mt-5">
        <h4 class="text-center mb-4"> CREAR CLIENTES</h4>
        <form action="{{route("products.store")}}" method="POST">
            @csrf

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="name">Nombe del Cliente :</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Nombre del Cliente">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="code">CC O NIT :</label>
                    <input type="text" name="code" id="code" class="form-control" placeholder="CC ONIT">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="city">Ciudad :</label>
                    <input type="text" name="city" id="city" class="form-control" placeholder="Ciudad">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="address">Direccion :</label>
                    <input type="text" name="address" id="address" class="form-control" placeholder="Direccion">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="email">Correo Electronico :</label>
                    <input type="text" name="email" id="email" class="form-control" placeholder="Correo Electornico">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="number">Telefono :</label>
                    <input type="text" name="number" id="number" class="form-control" placeholder="Telefono">
                </div>
            </div>
            <div class="text-center mt-4">
            <button class="btn btn-outline-primary"> Crear</button>
        </form>
    @endsection

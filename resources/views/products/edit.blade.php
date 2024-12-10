@extends('layouts.plantilla')
@section('title',"Editar Cliente")
@section('content')

<div class="container mt-5">
    <h4 class="text-center mb-4"> Modificar Cliente</h4>
    <form action="{{route("products.update", $products)}}" method="POST">
        @method("PUT")


        @csrf

                              <!-- ESTA VA A SER LA PAGINA PARA EDITAR LA INFORMACION DE LOS CLIENTES -->


        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="namr">Nombre del Cliente :</label>
                <input type="text" name="name" id="name" class="form-control" value="{{old("name",$products->name)}}">
            </div>
            <div class="col-md-6 mb-3">
                <label for="code">CC O NIT :</label>
                <input type="text" name="code" id="code" class="form-control" value="{{old("code",$products->code)}}">
            </div>
        </div>


        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="city">Ciudad :</label>
                <input type="text" name="city" id="city" class="form-control" value="{{old("city",$products->city)}}">
            </div>
            <div class="col-md-6 mb-3">
                <label for="address">Direccion :</label>
                <input type="text" name="address" id="address" class="form-control" value="{{old("address",$products->address)}}">
            </div>
        </div>


        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="email">Correo Electornico :</label>
                <input type="text" name="email" id="email" class="form-control" value="{{old("email",$products->email)}}">
            </div>
            <div class="col-md-6 mb-3">
                <label for="number">Telefono :</label>
                <input type="text" name="number" id="number" class="form-control" value="{{old("number",$products->number)}}">
            </div>

        <div class="text-center mt-4">
        <button class="btn btn-outline-primary"> Modificar </button>
    </form>

@endsection




















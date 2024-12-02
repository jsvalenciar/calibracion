@extends('layouts.plantilla')
@section('title',"Index de productos")
@section('content')

<div class="container mt-5">
    <h4 class="text-center mb-4"> Modificar Producto</h4>
    <form action="{{route("products.update", $products)}}" method="POST">
        @method("PUT")


        @csrf

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="code">Nombre</label>
                <input type="text" name="name" id="name" class="from-control" value="{{old("name",$products->name)}}">
            </div>
            <div class="col-md-6 mb-3">
                <label for="code">Codigo</label>
                <input type="text" name="code" id="code" class="from-control" value="{{old("code",$products->code)}}">
            </div>
        </div>


        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="email">Correo Electornico</label>
                <input type="text" name="email" id="email" class="from-control" value="{{old("email",$products->email)}}">
            </div>
            <div class="col-md-6 mb-3">
                <label for="address">Unidad</label>
                <input type="text" name="address" id="address" class="from-control" value="{{ old("address",$products->address)}}">
            </div>
        </div>
        <div class="text-center mt-4">
        <button class="btn btn-outline-primary"> Modificar </button>
    </form>

@endsection




















@extends('layouts.plantilla')
@section('title',"Inicio de Clientes")
@section('content')
    

                                       <!-- ESTA VA A SER LA PAGINA PARA MOSTRAR LOS CLIENTES Y EL BOTON PARA CRERALOS -->
<h4> CLIENTES </h4> <a href="{{ route("products.create")}}" class="btn btn-primary btn-lg">Crear Cliente </a>

    <table class="table caption-top">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre del Cliente</th>
                <th>CC O NIT</th>
                <th>Ciudad</th>
                <th>Direccion</th>
                <th>Correo Electornico</th>
                <th>Telefono</th>
                
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->code}}</td>
                <td>{{$product->city}}</td>
                <td>{{$product->address}}</td>
                <td>{{$product->email}}</td>
                <td>{{$product->number}}</td>
                <td class= "d-flex justify-content-start gap-2">
                    <a href="{{route("products.edit", $product)}}" class="btn btn-outline-success"> Editar</a>
                    <form action="{{route("products.destroy", $product)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger"> Eliminar </button>
                    </form>
                    <a href="{{route('pdf', $product->id)}}" target="_blank" class="btn btn-outline-primary">PDF</a>
                </td>                
            </tr>    
            @endforeach
        </tbody>
    </table>
    <div>
        {{$products->links()}}
    </div>
@endsection


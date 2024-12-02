<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Producto {{$product->id}}</title>
    <style>
        tr{
            border: 1px solid black;
        }
        th{
            background-color: lightgray
        }
    </style>
</head>
<body>
    <h1> Informacion del Cliente {{$product->name}}</h1>
<table class="table caption.top">
    <thead>
        <tr>
                <th>Id</th>
                <th>Nombre Empresa</th>
                <th>NIT</th>
                <th>Correo Electornico</th>
                <th>Direccion</th>
    </thead>
    <tbody>
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->code}}</td>
            <td>{{$product->email}}</td>
            <td>{{$product->address}}</td>
        </tr>
    </tbody>
</table>
    
</body>
</html>
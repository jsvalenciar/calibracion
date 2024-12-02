<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="/css/bootstrap.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Management Inventory</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                  </li>
                <a class="nav-link active" aria-current="page" href="{{route('products.index')}}">Productos</a>
              </li>
              <!--<li class="nav-item">
                <a class="nav-link" href="/movements">Movimientos</a>
              </li>-->
            </ul>
          </div>
        </div>
      </nav>
  
    @yield('content')
    </body>
</html>
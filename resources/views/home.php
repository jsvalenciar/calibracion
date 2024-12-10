<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Manejador de Inventario</title>
</head>
<body>
  <div class="card">
    <div class="card-header"></div>
    <div class="card-body">
    <div class="text-center">
    <div>
    <img src="{{ asset("imagenes/casa.jpg") }}" alt="home Aplication">
    </div>
      <h5 class="card-title">Bienvenido al Aplicativo Web</h5>
      <p class="card-text">Analisis Metrologico</p>
      <a href="/login" class="btn btn-primary active" data-bs-toggle="button" aria-pressed="true">Iniciar Sesión</a>
      <a href="/register" class="btn btn-primary active" data-bs-toggle="button" aria-pressed="true">Crear Cuenta</a>

      <br><br>
      <a href="/products" class="btn btn-primary">Ir a Menú</a>
    </div>
  </div>
</body>
</html>



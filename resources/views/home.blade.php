<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALIBRACION BIOMEDICA</title>
    <style>

        /* Estilo para el fondo */
        .fondo {
            background-image: url('{{ asset('imagenes/home.jpg') }}'); /* Ruta de la imagen */
            background-size: cover;
            background-position: absolute;
            height: 100vh; /* Ocupa toda la altura de la pantalla */
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            font-family: Arial, sans-serif;
        }

        /* Estilo para los títulos */
        .titulo {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 290px;
        }

        /* Estilo para los botones */
        .boton {
            padding: 15px 25px;
            font-size: 1rem;
            background-color: #3050bb;
            color: white;
            border: 70px;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .boton:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>

  
<div class="fondo">
    <div>
      <div>
          <div class="titulo">Bienvenido al aplicativo Web</div>
          <a href="/login" class="boton">Iniciar Sesión</a>
          <a href="/register" class="boton" style="margin-left: 10px;">Crear Usuario </a>
      </div>
  </div>
</div>

</body>
</html>

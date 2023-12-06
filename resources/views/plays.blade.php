<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>PWA de Películas</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
<x-navbar/>
  <!-- Aquí comienza el contenido -->
  <div class="container mt-4">
    <h1>Funciones de hoy</h1>

    <div class="row">
      @foreach ($data as $play)
      <div class="col-md-6 mb-4">
        <a class="card" href="/comprar-boletos/{{ $play -> id}}">
          <img src="{{ $play -> movie -> cover_path}}" class="card-img-top img-fluid" style="height: 500px;" alt="Película 1">
          <div class="card-body">
            <h5 class="card-title">{{ $play -> movie -> name }}</h5>
            <p><b>Hora:</b> {{ date("h:i:a", strtotime($play -> hour_function))}}</p>
            <p><b>Sala:</b> {{ $play -> room -> name }}</p>
          </div>
        </a>
      </div>
      @endforeach

    </div>
  </div>
  <!-- Aquí termina el contenido -->

  <!-- Incluye los scripts de Bootstrap y PWA -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <!-- Puedes agregar tu propio script para la lógica de la PWA aquí -->

</body>

</html>
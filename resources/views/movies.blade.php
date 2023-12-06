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
    <h1>Catálogo de Películas</h1>

    <div class="row">
      @foreach ($movies as $movie)
      <div class="col-md-6 mb-4">
        <a class="card" href="/pelicula/{{ $movie -> id}}">
          <img src="{{ $movie -> cover_path}}" class="card-img-top img-fluid" style="height: 500px;" alt="Película 1">
          <div class="card-body">
            <h5 class="card-title">{{ $movie -> name }}</h5>
            <!-- <p class="card-text">{{ $movie -> synopsis }}</p> -->
          </div>
        </a>
      </div>
      @endforeach

    </div>
  </div>
</body>

</html>
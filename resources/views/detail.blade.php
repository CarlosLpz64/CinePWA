<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Detalles de la Película</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
<x-navbar/>
<div class="container text-center mt-5">
    <div class="card">
        <img src="{{ $data -> cover_path}}" alt="Poster de la Película" class="card-img-top mx-auto d-block" style="width: 200px;">
        <div class="card-body">
            <h2 class="card-title">{{ $data -> name}}</h2>
            <p class="card-text"><span class="badge badge-primary">{{ $data -> category -> name}} | {{ $data -> duration}} minutos</span></p>
            <p class="card-text"><strong>Director:</strong> {{ $data -> director -> name}}</p>
            <p class="card-text"><strong>Sinopsis:</strong> {{ $data -> synopsis}}</p>
        </div>
    </div>
    <br>
    <a href="/peliculas" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Regresar</a>
</div>

</body>
</html>

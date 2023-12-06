<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Selección de Asientos</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
  <style>
    /* Estilos adicionales para la representación de asientos */
    .asiento {
      width: 30px;
      height: 30px;
      background-color: #c0c0c0;
      border: 1px solid #808080;
      margin: 2px;
      display: inline-block;
      cursor: pointer;
    }
    .asiento-seleccionado {
      background-color: #28a745;
      border: 1px solid #218838;
    }
    .pantalla {
      width: 100%;
      height: 20px;
      background-color: #808080;
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
<x-navbar/>


  <!-- Contenido principal con pantalla arriba y representación de asientos -->
  <div class="container mt-4 text-center">
    <h1>Selecciona tus Asientos</h1>

    <div class="row">
      <!-- Sala de funciones -->
      <div class="col-md-12 mb-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Sala de Funciones</h5>
            <div class="pantalla"></div>
            <!-- Representación de asientos como imágenes -->
            <?php
              $filas = 5;
              $columnas = 6;

              for ($fila = 1; $fila <= $filas; $fila++) {
                for ($columna = 1; $columna <= $columnas; $columna++) {
                  echo '<div class="asiento" id="asiento: ' . $fila . '-' .$columna . '" onclick="toggleAsiento(this)"></div>';
                }
                echo '<br>';
              }
            ?>
          </div>
        </div>
      </div>

      <!-- Botones de continuar y cancelar -->
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Resumen de la Selección</h5>
            <p>Asientos seleccionados:</p>
            <ul id="asientosSeleccionados"></ul>
            <button class="btn btn-success btn-block" onclick="continuar()">Continuar</button>
            <a class="btn btn-danger btn-block" href="/funciones">Cancelar</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Script para manejar la selección de asientos -->
  <script>
    function toggleAsiento(asiento) {
      $(asiento).toggleClass('asiento-seleccionado');
      var asientoId = asiento.id;
      var seleccionado = $(asiento).hasClass('asiento-seleccionado');

      if (seleccionado) {
        $('#asientosSeleccionados').append('<li>' + asientoId + '</li>');
      } else {
        $('#asientosSeleccionados li:contains("' + asientoId + '")').remove();
      }
    }

    function continuar() {
      alert('¡Lo sentimos!, parece que nuestro servicio no está disponible. Por favor intenta nuevamente más tarde.');
    }

    function cancelar() {
      alert('Cancelar la selección de asientos.');
    }
  </script>
</body>
</html>

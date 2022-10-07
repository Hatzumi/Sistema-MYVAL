<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> CONTABILIDAD - ESPACIO DE TRABAJO </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>

  <nav class="navbar navbar-expand-lg bg-white">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="Logo.jpeg" alt="" width="95" height="60">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
    </div>
  </nav>

  <body>

    <h2 class="fw-bold text-center py-2">PROGRAMA DIARIO DE CARGA - 17 / Sep / 2022</h2>
      <div class="table text-center">
        <br>
      <table class="table table-bordered">
        <thead>
          <tr>
          <th scope="col">No.</th>
          <th scope="col">Cliente</th>
          <th scope="col">#</th>
          <th scope="col">Contenedores</th>
          <th scope="col">Origen</th>
          <th scope="col">Destino</th>
          <th scope="col">Costos</th>
          <th scope="col">No. Factura</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <!--
            Amarillo es que está en proceso
            Morado es que se perdió la maniobra o maniobra en falso
            Rojo es que cayó en revisión
            Verde es que ya salió-->
            <th scope="row">1</th>
            <td>INTEGRACE</td>
            <td>1</td>
            <td>HU274635AL93</td>
            <td>SSA</td>
            <td>INTEGRACE</td>
            <td>1200</td>
            <td contenteditable></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <br>
        <button class="btn btn-outline-success me-md-4" type="button">Programa finalizado</button>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
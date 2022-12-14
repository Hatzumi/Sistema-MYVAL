<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> OPERACIONES - ESPACIO DE TRABAJO </title>
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
    <div>
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="solicitudes-tab" data-bs-toggle="tab" data-bs-target="#solicitudes-tab-pane" type="button" role="tab" aria-controls="solicitudes-tab-pane" aria-selected="true">Solicitudes</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="programa-tab" data-bs-toggle="tab" data-bs-target="#programa-tab-pane" type="button" role="tab" aria-controls="programa-tab-pane" aria-selected="false">Programa</button>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="solicitudes-tab-pane" role="tabpanel" aria-labelledby="solicitudes-tab" tabindex="0">
          <br>
          <h2 class="fw-bold text-center py-2">SOLICITUDES DE MANIOBRAS</h2>
          <div class="table text-center">
            <br>
            <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col"></th>
                <th scope="col">Cliente</th>
                <th scope="col">#</th>
                <th scope="col">Contenedores</th>
                <th scope="col">Origen</th>
                <th scope="col">Destino</th>
                <th scope="col">Peso</th>
                <th scope="col">Tama??o</th>
                <th scope="col">Notas</th>
              </tr>
            </thead>
            <tbody>
              <tr>
              <!-- Amarillo es que est?? en proceso, Morado es que se perdi?? la maniobra o maniobra en falso, Rojo es que cay?? en revisi??n, Verde es que ya sali??-->
                <th><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1"></th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2"></th>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3"></th>
                <td></td>
                <td></td>
              </tr>
            </tbody>
            </table>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <br>
              <button class="btn btn-outline-danger me-md-2" type="button">Rechazar</button>
              <button class="btn btn-outline-success me-md-4" type="button">Aceptar</button>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="programa-tab-pane" role="tabpanel" aria-labelledby="programa-tab" tabindex="0">
          <br>
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
                <th scope="col">Operador</th>
                <th scope="col">Peso</th>
                <th scope="col">Tama??o</th>
                <th scope="col">Notas</th>
                <th scope="col">Estatus</th>
              </tr>
            </thead>
            <tbody>
              <tr>
              <!-- Amarillo es que est?? en proceso, Morado es que se perdi?? la maniobra o maniobra en falso, Rojo es que cay?? en revisi??n, Verde es que ya sali??-->
                <th scope="row">1</th>
                <td contenteditable></td>
                <td contenteditable></td>
                <td contenteditable></td>
                <td contenteditable></td>
                <td contenteditable></td>
                <td contenteditable></td>
                <td contenteditable></td>
                <td contenteditable></td>
                <td contenteditable></td>
                <td contenteditable>
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option4">
                </td>
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
              <button class="btn btn-outline-warning me-md-2" type="button">Actualizar</button>
              <button class="btn btn-outline-success me-md-4" type="button">Programa finalizado</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
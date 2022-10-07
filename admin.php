<?php
include ("header.php")
?>

<!DOCTYPE html>
<html lang="en">

  <body>
    <div>
      <br>
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="programa-tab" data-bs-toggle="tab" data-bs-target="#programa-tab-pane" type="button" role="tab" aria-controls="programa-tab-pane" aria-selected="true">Programa</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="inventario-tab" data-bs-toggle="tab" data-bs-target="#inventario-tab-pane" type="button" role="tab" aria-controls="inventario-tab-pane" aria-selected="false">Inventario</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="trabajadores-tab" data-bs-toggle="tab" data-bs-target="#trabajadores-tab-pane" type="button" role="tab" aria-controls="trabajadores-tab-pane" aria-selected="false">Trabajadores</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false" disabled>Disabled</button>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="programa-tab-pane" role="tabpanel" aria-labelledby="programa-tab" tabindex="0">
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
                <th scope="col">Tamaño</th>
                <th scope="col">Notas</th>
                <th scope="col">Costos</th>
              </tr>
            </thead>
            <tbody>
              <tr>
              <!-- Amarillo es que está en proceso, Morado es que se perdió la maniobra o maniobra en falso, Rojo es que cayó en revisión, Verde es que ya salió-->
                <th scope="row">1</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
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
              <button class="btn btn-outline-warning me-md-2" type="button">Actualizar</button>
              <button class="btn btn-outline-success me-md-4" type="button">Enviar</button>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="inventario-tab-pane" role="tabpanel" aria-labelledby="inventario-tab" tabindex="0">
        <br>
        <h2 class="fw-bold text-center py-2">INVENTARIO</h2>
          <div class="table text-center">
            <br>
            <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">*</th>
                <th scope="col">Fecha - Alta</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripción</th>
                <th scope="col">Existencias</th>
                <th scope="col">Precio/Unidad</th>
                <th scope="col">Ubicación</th>
              </tr>
            </thead>
            <tbody>
              <tr>
              <!-- Amarillo es que está en proceso, Morado es que se perdió la maniobra o maniobra en falso, Rojo es que cayó en revisión, Verde es que ya salió-->
                <th><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></th>
                <td contenteditable></td>
                <td contenteditable></td>
                <td contenteditable></td>
                <td contenteditable></td>
                <td contenteditable></td>
                <td contenteditable></td>
              </tr>
              <tr>
                <th><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></th>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></th>
                <td></td>
                <td></td>
              </tr>
            </tbody>
            </table>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <br>
              <button class="btn btn-outline-danger me-md-2" type="button">Eliminar</button>
              <button class="btn btn-outline-warning me-md-2" type="button">Actualizar</button>
              <button class="btn btn-outline-success me-md-4" type="button">Agregar</button>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="trabajadores-tab-pane" role="tabpanel" aria-labelledby="trabajadores-tab" tabindex="0">
        <br>
        <h2 class="fw-bold text-center py-2">TRABAJADORES</h2>
          <div class="table text-center">
            <br>
            <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col"></th>
                <th scope="col">No.</th>
                <th scope="col">Nombre completo</th>
                <th scope="col">Área</th>
                <th scope="col">Pagos</th>
                <th scope="col">Deudas</th>
              </tr>
            </thead>
            <tbody>
              <tr>
              <!-- Amarillo es que está en proceso, Morado es que se perdió la maniobra o maniobra en falso, Rojo es que cayó en revisión, Verde es que ya salió-->
                <th><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></th>
                <td>1</td>
                <td contenteditable></td>
                <td contenteditable></td>
                <td contenteditable></td>
                <td contenteditable></td>
              </tr>
              <tr>
                <th><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></th>
                <td>2</td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></th>
                <td>3</td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
            </table>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <br>
              <button class="btn btn-outline-danger me-md-2" type="button">Eliminar</button>
              <button class="btn btn-outline-warning me-md-4" type="button">Actualizar</button>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">...</div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
<?php
  include_once 'bd.php';

  session_start();

  if(isset($_GET['cerrar_sesion'])){
    session_unset();

    session_destroy();
  }

  if(isset($_SESSION['rol'])){
    switch($_SESSION['rol']){
      case 1:
        header('location: admin.php');
      break;

      case 3:
        header('location: operaciones.php');
      break;

      case 5:
        header('location: contabilidad.php');
      break;

      default:
    }
  }

  if(isset($_POST['correo']) && isset($_POST['contraseña'])){
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];

    $db = new Database();
    $query = $db->connect()->prepare('SELECT*FROM trabajadores WHERE correo = :correo AND contraseña = :contraseña');
    $query->execute(['correo' => $correo, 'contraseña' => $contraseña]);

    $row = $query->fetch(PDO::FETCH_NUM);
    if($row == true){
      // validar rol
      $rol = $row[3];
      $_SESSION['rol'] = $rol;
      switch($_SESSION['rol']){
        case 1:
          header('location: admin.php');
        break;
  
        case 3:
          header('location: operaciones.php');
        break;
  
        case 5:
          header('location: contabilidad.php');
        break;
  
        default:
      }
    }else{
      echo "EL usuario o contraseña cson incorrectos";
    }
  }

?> 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Bienvenida - MYVAL RED </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
    <style>

      .bg{
        
        background-image: url(logo.jpeg);
        background-position: center center;
      }

    </style>
  </head>

  <nav class="navbar navbar-expand-lg bg-white">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="Logo.jpeg" alt="" width="125" height="80">
      </a>
    </div>
  </nav>

  <body>
  <br>
    <div class="container rounded shadow" >
      <div class="row">
        <div class="col bg">

        </div>
        <div class="col">
          <br>
          <br>
          <br>
          <h2 class="fw-bold text-center py-2">Bienvenido</h2>

          <form action="index.php" method="POST">
            <?php
              $correo = "";
              $contraseña = "";

              if(isset($_POST['correo'])){

                $correo = $_POST['correo'];
                $contraseña = $_POST['contraseña'];

              }
            ?>
            <br>
            <div class="input-group py-2">
              <input type="email" class="form-control" name="correo" placeholder="Correo electrónico">
              <span class="input-group-text">@ej.com</span>
            </div>
            <br>
            <div class="input-group py-2">
              <span class="input-group-text">***</span>
              <input type="password" class="form-control" name="contraseña" placeholder="Contraseña">
            </div>
            <br>
            <div class="d-grid py-2">
              <button type="submit" name="ingresar" class="btn btn-outline-success">Ingresemos</button>
            </div>
            <br>
            <div class="row g-3">
              <div class="col-5">
                <label class="col-form-label">O si es uno de nuestros clientes . . .</label>
              </div>
              <div class="d-grid gap-2 col-7">
                <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal"> De click en este acceso </button>
              </div>
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Solicitud de Maniobra</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body row g-3">
                    <!--<form action="#" method="POST">-->
                      <div class="col-12">
                        <label for="cliente" class="col-form-label">Nombre de su empresa:</label>
                        <input type="text" class="form-control" id="cliente" required>
                      </div>
                      <div class="col-12">
                        <label for="contenedor1" class="col-form-label">Contenedor:</label>
                        <input type="text" class="form-control" id="contenedor1" required>
                      </div>
                      <div class="col-md-12">
                        <div class="plus-contenedor">
                          <button type="button" class="btn btn-outline-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                          </svg></button>
                        </div>
                      </div>
                      <!--<div class="invisible col-12">
                        <label for="seg-contenedor" class="col-form-label">Contenedor:</label>
                        <input type="text" class="form-control" id="seg-contenedor">
                      </div>-->
                      <div class="col-md-6">
                        <label for="origen" class="col-form-label">Origen:</label>
                        <input type="text" class="form-control" id="origen" required>
                      </div>
                      <div class="col-md-6">
                        <label for="destino" class="col-form-label">Destino:</label>
                        <input type="text" class="form-control" id="destino" required>
                      </div>
                      <div class="col-md-6">
                        <label for="hora" class="col-form-label">Hora de entrada:</label>
                        <input type="text" class="form-control" id="hora" required>
                      </div>
                      <div class="col-md-6">
                        <label for="peso" class="col-form-label">Peso:</label>
                        <input type="text" class="form-control" id="peso" required>
                      </div>
                      <div class="col-md-3">
                        <label for="tamaño" class="col-form-label">Tamaño:</label>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="tamaño" value="20">
                          <label class="form-check-label" for="tamaño">20</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="tamaño" value="40">
                          <label class="form-check-label" for="tamaño">40</label>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <label for="imo" class="col-form-label">IMO:</label>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="imo" value="si">
                          <label class="form-check-label" for="imo">Si</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="imo" value="no">
                          <label class="form-check-label" for="imo">No</label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <label for="no_imo" class="col-form-label">No. de IMO:</label>
                        <input type="text" class="form-control" id="no_imo">
                        <br>
                      </div>
                      <div class="input-group">
                        <input type="file" class="form-control" id="maniobra" aria-label="Subir">
                        <button class="btn btn-outline-success" type="button" id="maniobra">Subir</button>
                      </div>
                    <!--</form>--> 
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-outline-success">Enviar</button>
                  </div>
                </div>
              </div>
            </div>
            <br>
            <br>
            <br>
          </form>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>

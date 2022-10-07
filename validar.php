<?php

$correo_electronico = $_POST['correo_electronico'];
$contraseña = $_POST['contraseña'];
session_start();
$_SESSION['correo_electronico'] = $correo_electronico;

$conexion = mysqli_connect("localhost","root","","MYVALRED");

$consulta = "SELECT*FROM Empleados where correo_electronico='$correo_electronico' and contraseña='$contraseña'";
$resultado = mysqli_query($conexion,$consulta);

$filas = mysqli_num_rows($resultado);

if($filas){
    header(location:inicio.php);

}else{
    ?>
    <?php
    include("index.php");
    ?>
    <h1 class="bad">Verifique que sus datos sean los correctos</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);

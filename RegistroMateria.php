<?php
$nombre1 = $_POST['nombre1'];
$nombre2 = $_POST['nombre2'];
$apellido1 = $_POST['apellido1'];
$apellido2 = $_POST['apellido2'];
$documento = $_POST['documento'];

include "conexion.php";

$insertar = "INSERT INTO persona (nombre1, nombre2, apellido1, apellido2, documento) VALUES ('$nombre1', '$nombre2', '$apellido1', '$apellido2', '$documento')";

if ($conexion -> query($insertar) == true) {
    header('location: ../registros.php');
} else {
    header('location: ../index.php');
}

$conexion -> close();
?>


<?php
include('primero.php');
include('header_pagina.php');
include('footer.php');
include('listado_materia2TGest.html');

// Detalles de la base de datos
$servidor = "localhost";
$usuario = "root";
$password = "";
$nombre_basedatos = "inscripcionc";

// Realizo la conexión
$conn = new mysqli($servidor, $usuario, $password, $nombre_basedatos);

// Verificación de la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Procesa los datos del formulario y guárdalos en la base de datos
    for ($i = 1; $i <= 27; $i++) {
        $materia = "materia" . $i;
        if (isset($_POST[$materia])) {
            $opcion = $_POST[$materia];
            $sql = "INSERT INTO inscripcion (materia, modalidad) VALUES ('$materia', '$opcion')";
            if ($conn->query($sql) === TRUE) {
                echo "Datos guardados correctamente para $materia<br>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error . "<br>";
            }
        }
    }
}

// Cierra la conexión a la base de datos al final del archivo
$conn->close();
?>




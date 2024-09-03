<?php
$host_name = 'localhost';
$database = 'registro_materia';
$user_name = 'root';
$password= '';

$conexion = mysqli_connect($host_name, $user_name, $password, $database);

if (mysqli_errno($conexion)) {
    //echo "error al conectarme";
}else{
    //echo "me conecte a la base de datos";
}

$acentos = $conexion -> query("SET NAMES 'utf8'");
?>


<?php

$servidor= "localhost";
$usuario= "root";
$bd= "inscripcionc";
$bd= "inscripcioncursado";
$pass="";
$conex= mysqli_connect($servidor, $usuario, $pass, $bd);
if (!$conex){
    echo "ERROR AL ABRIR LA BD!!";
    EXIT();
}
mysqli_set_charset($conex, "utf8");

?>

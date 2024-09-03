<?php
session_start();
require_once"conexion.php";

$dni= $_POST["dni_usuario"]; 
$clave = $_POST["clave_usuario"];
$perfil = $_POST["perfil_usuario"];

//Armar la sentencia sql

$sql="SELECT * FROM usuario WHERE dni='$dni' AND clave='$clave' AND perfil=$perfil";

//Ejecutar el sql 

$result=mysqli_query($conex,$sql);

if(mysqli_num_rows($result)>0) {
    $fila=mysqli_fetch_array($result);
    if($fila["perfil"]==1){
    $_SESSION["dnialu"]=$dni;
    header("Location:inicio_alumno.php");
    } else{
    $_SESSION["dnibedel"]=$dni;
    header("Location:inicio_bedelia.php");
    }

    
//header("location:index.php?mensaje=ok");    

}else {

    header("location:index.php?mensaje=nook");
}



?>
<?php
session_start();

// Conexion a la BD
require_once "conexion.php";

//Funcion de Validacion de Datos

require_once "funcionesval.php";


$error = "";

$id=$_SESSION['ids'];

 

if(!empty(trim($_POST['nombre'])) && !empty(trim($_POST['apellido'])) && 
   !empty(trim($_POST['dni'])) && !empty(trim($_POST['cuil']))  && !empty(trim($_POST['usuario']))  ){
	

	if (ValidacionDatos()){
         
        
		$nombre = preg_replace('/\s+/',' ',$_POST['nombre']);
		$apellido = preg_replace('/\s+/',' ',$_POST['apellido']);
		$cuil = $_POST['cuil'];
		$dni = $_POST['dni'];
		$usuario = $_POST['usuario'];

		// echo $nombre;
		// echo $id;
		

		$nada = "antes de actualizar";
		echo "<script> alert('".$nada."'); </script>";
        // Se arma la sentencia SQL de Actualización
            
        $sql="UPDATE alumno SET  dni='$dni', cuil='$cuil', nombre='$nombre', apellido='$apellido', Usuario_idUsuario='$usuario' WHERE idAlumno=$id";    
        
        // Ejecuta la sentencia

        mysqli_query($conex,$sql);

    //     die($sql);



        if (mysqli_affected_rows($conex)==1){
 	

            header("Location:listado_alumno.php?msje=ok");
			$nada = "Todo OK";
			echo "<script> alert('".$nada."'); </script>";
			

        }else{ 
			
            $error.="No se realizó Actualización! ";
	        header("Location:inicio_bedelia.php?msje=".$error);
			echo "<script> alert('".$error."'); </script>";

        }
	
	}else{
		header("Location:inicio_bedelia.php?msje=".$error);
		echo "<script> alert('".$error."'); </script>";
	}
}else{

	$error.="Faltan Datos ";
	header("Location:inicio_bedelia.php?msje=".$error);
	echo "<script> alert('".$error."'); </script>";
	
 }

?>
<?php

 require_once "conexion.php";

 require_once "funcionesval.php";



$error = "";



if(!empty(trim($_POST['nombre'])) && !empty(trim($_POST['apellido'])) && 
   !empty(trim($_POST['dni'])) && !empty(trim($_POST['clave'])) && !empty(trim($_POST['cuil']))){
	

	if (ValidacionDatos()){
         
		$nombre = preg_replace('/\s+/',' ',$_POST['nombre']);
		$apellido = preg_replace('/\s+/',' ',$_POST['apellido']);
		$dni = $_POST['dni'];
		$clave = $_POST['clave'];
        $cuil = $_POST['cuil'];
            
        $sql="INSERT INTO usuario(dni,clave,perfil) VALUES('$dni','$clave',1)";

        $result=mysqli_query($conex,$sql);

        //die($sql);

        if ($result){
			
			$ultimoid=mysqli_insert_id($conex);
			
			$sql="INSERT INTO alumno(dni, cuil, nombre, apellido, usuario_idusuario) VALUES ('$dni', '$cuil', '$nombre', '$apellido', $ultimoid)";
			
			$result=mysqli_query($conex,$sql);
             
            header("Location:index.php?mensaje=ok");

        }else{ 
			//codigo 1062 duplicado
            if(mysqli_errno($conex)==1062){
				$error.="Error, DNI duplicado";
				header("location:index.php?mensaje=".$error);
			}else{
            $error.="Error en la Inserción de datos ";
            header("Location:index.php?mensaje=".$error);
        }
     
     }
	
	}else{
		header("Location:index.php?mensaje=".$error);
	}
}else{

  	$error.="Faltan Datos ";
	header("Location:index.php?mensaje=".$error);
  
}


	

?>

<link rel="stylesheet" href="http://www.fpdf.org/">



<?php

function ValidacionDatos() {

 global $error;

	$var_bool=TRUE;
    

	// Validar el nombre, apellido, dni, cuil

	if(!is_string($_POST['nombre']) || !preg_match("/^[a-zA-Z ]+$/", $_POST['nombre'])){
		$error.="Error nombre ";
		$var_bool=FALSE;
	}
	
	if(!is_string($_POST['apellido']) || !preg_match("/^[a-zA-Z ]+$/", $_POST['apellido'])){
		$error.=" Error apellido ";
		$var_bool=FALSE;
	}

	if(preg_match("/[a-zA-Z]/",$_POST['dni']) || strlen($_POST['dni'])<>8){
		$error.="Error DNI ";
		$var_bool=FALSE;
	}

    if(preg_match("/[a-zA-Z]/",$_POST['cuil']) || strlen($_POST['cuil'])<>11){
		$error.="Error CUIL ";
		$var_bool=FALSE;
	}

	


	return $var_bool;
}

?>
<?php
// Conexion a la Base de Datos Biblioteca  
session_start();

require_once "conexion.php";

/* Si no existe mensaje resultante de actualización (Porque aún no hizo actualizacion) */

if (!isset($_GET['msje'])){

  // Guarda el id enviado por parámetro en URL, desde listado.php, y lo evalúa con $_GET

  $id=$_GET['id'];
  $_SESSION['ids']=$id;

}    

$sql="SELECT * FROM alumno where idAlumno = $id";

//die($sql);

$result=mysqli_query($conex,$sql); 

$fila=mysqli_fetch_array($result);


  include('primero.php');
  include('header_pagina.php');

   ?>

   
  
  <div class="container mt-2 mb-5">
  <div class="text-center mt-5 mb-2"><h2>Editar datos personales</h2></div>	
  <br>
  <HR>
  <br>
  	
  <form class="row g-3" action="bedelia_editar_insertar.php" method="POST">

      <div class="col-sm-6 mb-3">
        <label for="telefono" class="form-label">* DNI</label>
        <input type="text" class="form-control" name="dni" id="dni" value="<?php echo $fila['dni']; ?>" required readonly>
        <input type="hidden" class="form-control" name="usuario" id="usuario" value="<?php echo $fila['Usuario_idUsuario']; ?>">
      </div>
      
      <div class="col-sm-6">
        <label for="nombre" class="form-label">* Nombre</label>
        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Editar tu Nombre" value="<?php echo $fila['nombre']; ?>" required>
      </div>
      <div class="col-sm-6 mb-3">
        <label for="apellido" class="form-label">* Apellido</label>
        <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Ingresa tu Apellido" value="<?php echo $fila['apellido']; ?>" required>
      </div>
    
      <div class="col-sm-6 mb-3">
        <label for="dni" class="form-label">* CUIL</label>
        <input type="text" class="form-control" name="cuil" id="cuil" placeholder="Ingresa 11 dígitos del cuil" value="<?php echo $fila['cuil']; ?>" required>
      </div>
  
      <div class="col-12 text-center">
          <div> <h5> ¿Estas seguro que quieres actualizar los datos de este Alumno?</h5>
              <br>
              <button type="submit" class="btn btn-primary" name="enviar" id="enviar">Actualizar datos</button>
              <a class="btn btn-success" href="listado_alumno.php">Cancelar</a>
      </div>
 
 
  </form>
   


</body>

</html>
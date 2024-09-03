<?php

session_start();

require_once "conexion.php";

/* Si no existe mensaje resultante de actualización (Porque aún no hizo actualizacion) */

if (!isset($_GET['msje'])){

  // Guarda el id enviado por parámetro en URL, desde listado.php, y lo evalúa con $_GET

   $id=$_GET['id'];

}else{
    


     $id=$_SESSION['ids'];
}     

$sql="SELECT * FROM alumno where idAlumno = $id";

//die($sql);

$result=mysqli_query($conex,$sql); 

$fila=mysqli_fetch_array($result);
        

include('primero.php');
include('header_pagina.php');

  ?>

  
 <section>
 
 <div class="container mt-2 mb-5">
 <div class="text-center my-5 text-primary"><h2>Eliminar Datos Personales</h2></div>	
       
 <form class="row g-3" action="bedelia_eliminar.php" method="post">



 <div class="col-sm-6 mb-3">
        <label for="telefono" class="form-label">* DNI</label>
        <input type="text" class="form-control" name="dni" id="dni" value="<?php echo $fila['dni']; ?>" disabled>
        <input type="hidden" class="form-control" name="usuario" id="usuario" value="<?php echo $fila['Usuario_idUsuario']; ?>">
        <input type="hidden" class="form-control" name="idusuario" id="idusuario" value="<?php echo $fila['idAlumno']; ?>">
      </div>
      
      <div class="col-sm-6">
        <label for="nombre" class="form-label">* Nombre</label>
        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Editar tu Nombre" value="<?php echo $fila['nombre']; ?>" disabled>
      </div>
      <div class="col-sm-6 mb-3">
        <label for="apellido" class="form-label">* Apellido</label>
        <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Ingresa tu Apellido" value="<?php echo $fila['apellido']; ?>" disabled>
      </div>
    
      <div class="col-sm-6 mb-3">
        <label for="dni" class="form-label">* CUIL</label>
        <input type="text" class="form-control" name="cuil" id="cuil" placeholder="Ingresa 11 dígitos del cuil" value="<?php echo $fila['cuil']; ?>" disabled>
      </div>
  


 
      <div class="col-12 text-center">
          <div> <h5> ¿Estas seguro que quieres eliminar los datos de este Alumno?</h5>
              <br>
      <button type="submit" class="btn btn-primary" name="btn_editar" id="editar">Confirmar</button>
      <a class="btn btn-success" href="listado_alumno.php" role="button">Cancelar</a>
      </div>
 
 </form>
  

</section>

 <?php
   include('footer.php');
 ?>

<script src="bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
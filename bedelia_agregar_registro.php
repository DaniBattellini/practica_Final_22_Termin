<?php
session_start();
if(isset($_SESSION["dnialu"])) {
    header("Location:inicio_alumno.php");
  }
  
  include('primero.php');
  include('header_pagina.php');

 ?>
      

  <section>
  
  <div class="container mt-4 mb-4">
  <div class="row">
  <div class="col-12 col-md-6">
<img class="foto_home" src="./imagenes/escuela.jpg" alt="escuela">
  </div>
  <div class="col-12 col-md-6">
  
  
<body>

   
   
  <section>
   
  
  <div class="container mt-2 mb-5">
  <div class="text-center mt-6 mb-2"><h2>Registro del Alumno</h2></div>	
  <div class="text-secondary"><p><small>* Dato Obligatorio</small></p></div>
  	
  <form class="row g-3" action="bedelia_insertar_datos.php" method="post">
  
  <div class="col-sm-6">
    <label for="nombre" class="form-label">* Nombre</label>
    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingresa tu Nombre" required>
  </div>
  <div class="col-sm-6 mb-3">
    <label for="apellido" class="form-label">* Apellido</label>
    <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Ingresa tu Apellido" required>
  </div>
   <div class="col-sm-6 mb-3">
    <label for="dni" class="form-label">* DNI</label>
    <input type="text" class="form-control" name="dni" id="dni" placeholder="Ingresa DNI de 8 dígitos numéricos" required>
  </div>
  <div class="col-sm-6 mb-3">
    <label for="cuil" class="form-label">* cuil</label>
    <input type="text" class="form-control" name="cuil" id="cuil" placeholder="Ingresa CUIL de 11 dígitos numéricos" required>
  </div>
  <div class="col-sm-6 mb-3">
    <label for="clave" class="form-label">* Clave</label>
    <input type="text" class="form-control" name="clave" id="clave" placeholder="Ingresa una clave de 8 caracteres como mínimo" required>
  </div>    
    
  <div class="col-12 text-center">
  <button type="submit" class="btn btn-primary" name="btn_registrar" id="btn_registrar">Registrar</button>
  
  </div>
  
  </form>
   
    
  <?php
    
    // Uso de GET para mostrar Mensaje resultante 

    if (isset($_GET["mensaje"])){

    	 if($_GET["mensaje"]!="ok"){

         echo "<div class='text-center mt-4 mb-5'><div class='alert alert-danger' role='alert'><strong>".$_GET["mensaje"]."</strong></div></div>"; 
         
       }else{

        header("refresh:3; url=http://localhost/Ejerc/listado.php");
         
        echo "<div class='text-center mt-4 mb-5'><div class='alert alert-success' role='alert'><strong>".$_GET["mensaje"]."</strong></div></div>";  
       
       }  
  } 
  ?> 
  



  </section>

  

</body>

</html>

  
   


  
  	
  </div>
  </div>
  </div>

  </section>

  <?php
    include('footer.php');
  ?>
   
   <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
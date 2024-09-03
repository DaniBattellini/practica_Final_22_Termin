<?php
session_start();


if (!isset($_SESSION["dnialu"]) && !isset($_SESSION["dnibedel"])) {
  header("Location:index.php");
} else {
  if (isset($_SESSION["dnibedel"])) {
    header("Location:inicio_bedelia.php");
  }
}


include('primero.php');
include('header_pagina.php');

 ?>
      
            
    
 
      <section>
  


  <div class="container mt-4 mb-1">
  
  <div class="row">
  <div class="col-12 col-md-6">
<img class="foto_home" src="./imagenes/alumno2.jpg" alt="escuela">
  </div>
  <div class="col-12 col-md-6">
  
  <h2 class="titulo__parrafo">Menu del Alumno</h2>

  <h3>Sistema de Gestion de Alumnado</h3>

  <h3>Tecnicaturas Superiores</h3> 

  <!-- botones -->

  <div class="form-group">
    <label for="carrera">SELECCIONE LA CARRERA</label>
    <!-- <select class="form-control" name="carrera" id="carrera"> -->
      <!-- <option value=0>Seleccione una opcion</option> -->
      <!-- <option value=15 >Tecnicatura en Desarrollo de Software</option> -->
      <!-- <option value=16>Tecnicatua en Gest. de las Organizaciones</option> -->
    </select>
  </div>
<br>
<button  type="submit" class="btn btn-primary btn-lg"><a href="listado_materia2TSoft.html" style="text-decoration: nome; color: inherit;">TECNICATURA EN DESARROLLO DE SOFTWARE </button>
<br></br>
<button type="submit" class="btn btn-primary btn-lg"><a href="listado_materia2TGest.html" style="text-decoration: nome; color: inherit;"> TECNICATURA EN GESTION DE LAS ORGANIZACIONES </button>
  <!-- fin botones -->
  
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
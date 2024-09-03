<header>

     <!-- Encabezado -->       
<div class="container-fluid"> 

  <div class="row encabezado">

    <div class="col-1 mt-3 mb-3">
      <a href="#">
      <img class="logo_escuela" src="imagenes/logo.jpg" alt="logo" id="img1"></a>
    </div>

     <div class="col-11 " >
      <h2 class="mt-5"> Inscripcion A Cursado de Materias</h2>
    </div>
  </div>
    
</div>
      
            

       <!-- Menú de Navegación -->  
      <nav class="navbar navbar-expand-md navbar-dark bg-primary">
      <div class="container-fluid">
    
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
      <?php
        if (!isset($_SESSION["dnialu"]) && !isset($_SESSION["dnibedel"])){
        ?>
      <ul class="navbar-nav">
      <a class="navbar-brand" href="index.php">Inicio</a>
        <li class="nav-item">
          <a class="nav-link" href="https://ens40-sfe.infd.edu.ar/sitio/">Institucional</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://escuela40.net/">Sist_Alumnos</a>
        </li>
       <li class="nav-item">
          <a class="nav-link" href="https://www.instagram.com/stories/ens40_nivelsuperior/sitio/">Novedades</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="registro.php">Registro</a>
        </li>
       </ul>
        <ul class="navbar-nav ms-auto">
        	
        <li class="nav-item">
          <a class="nav-link" href="login.php">Ingreso</a>
        </li>	
        </ul>
        <?php
        }else{

          if(isset($_SESSION["dnialu"])){

        ?>
        <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="">Inicio Alumno</a>
        </li>
       <li class="nav-item">
          <a class="nav-link" href="listado_M_pdf.php">Mis Inscripciones</a>
        </li>
       </ul>
        <ul class="navbar-nav ms-auto">
        <div class="mt-2">
        <span class="text-primary">
          <?php echo "Alumno: ".$_SESSION["dnialu"] ?> 
        </span>
        </div>
        <li class="nav-item">
          <a class="nav-link" href="salir.php">Salir</a>
        </li>	
        
        </ul>
        <?php
        }else{

        ?>

      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="inicio_bedelia.php">Inicio Bedelia</a>
        </li>
       <li class="nav-item">
          <a class="nav-link" href="error404.php">Consulta</a>
        </li>
       </ul>
        <ul class="navbar-nav ms-auto">
        <div class="mt-2">
        <span class="text-danger">
          <?php echo "Bedel: ".$_SESSION["dnibedel"] ?> 
        </span>
        </div>
        <li class="nav-item">
          <a class="nav-link" href="salir.php">Salir</a>
        </li>	
        
        </ul>

        <?php }} ?>
      </div>
      </div>
      </nav>       
</header>
    
    
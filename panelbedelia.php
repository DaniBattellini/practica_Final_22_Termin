<?php

session_start();

//echo "dni bedelia:" .$_SESSION["dnibedel"];

//echo "<a href=salir.php>Cerrar Sesion</a>";

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRACTICA</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
 
 
      <?php
        include('header.php');

      ?>
      
            
    
 
  <section>
  
  <div class="container mt-3 mb-5">
  <div class="row">
  <div class="col-12 col-md-2"></div>
  
  <div class="mt-5 text-center"><h3>Menu de Bedelia</h3></div>

  
  	
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
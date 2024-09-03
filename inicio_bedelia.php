<?php
session_start();

if(isset($_SESSION["dnialu"])) {
  header("Location:inicio_alumno.php");
}

include('primero.php');
include('header_pagina.php');

      ?>
      
            
  <section>
  


  <div class="container mt-4 mb-1">
  
  <div class="row">
  <div class="col-12 col-md-6">
<img class="foto_home" src="./imagenes/post.jpg" alt="escuela">
  </div>
  <div class="col-12 col-md-6">
  
  <h2 class="titulo__parrafo">Menu de Bedelia</h2>

  <h3>Sistema de Gestion de Alumnado</h3>

  <h3>Tecnicaturas Superiores</h3>
  
  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem itaque tenetur facilis quis! Perspiciatis eligendi repellat culpa eaque maxime quod sint tempore nemo cumque excepturi, cupiditate ad tempora? Soluta, quaerat!</p>


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
<?php
session_start();

if(isset($_SESSION["dnialu"])) {
  header("Location:inicio_alumno.php");
}

// Conexion a la Base de Datos Biblioteca 

require_once "conexion.php";

$sql="SELECT * FROM alumno ORDER BY idAlumno";

$result=mysqli_query($conex,$sql);

if (mysqli_num_rows($result)>0){

  include('primero.php');
  include('header_pagina.php');
  include('listado_materia.');
  
 ?>

<script src="./js/.js"></script>

     
      
            
      <section class="pagina" >
     
     <div class="container text-center ">
         <div class="text-center mt-5 mb-3"><h3>Listado de Materias</h3></div>
         
         <table class="table  table-striped table-hover">
             <div class="row">
                 <div class="col-9"></div>
                     <div class="col-3">
                     <div class="btn btn-primary mb-3 " > <a class="text-decoration-none text-white" href="bedelia_agregar_registro.php">+ Agregar</a></div>
                 </div>
             </div>
 
             <thead class="titulo__tabla">
                 <tr>
                 <th scope="col">Carrera</th>
                 <th scope="col">Anio</th>
                 <th scope="col">Condicion</th>
                  <th scope="col"></th>
                 <th scope="col"></th>
                 </tr>
             </thead>
         
             <tbody>
 
             <?php
 
                 While ($fila=mysqli_fetch_array($result)){
     
             ?>
         
                 <tr>
                     
                     <th scope="row"><?php echo $fila[""]; ?></th>
                     <td><?php echo $fila[""]; ?></td>
                     <td><?php echo $fila[""]; ?></td>
                     <td><?php echo $fila[""]; ?></td>
                     <td><a class="me-3 btn btn-success btn-sm" href="bedelia_editar_registro.php?id=<?php echo $fila [''];?>">Presencial</a>
                     <a class="btn btn-danger btn-sm" href="bedelia_eliminar_registro.php?id=<?php echo $fila [''];?>">SemiPresencial</a>
                     <a class="btn btn-danger btn-sm" href="bedelia_eliminar_registro.php?id=<?php echo $fila [''];?>">Libre</a>
                     <a class="btn btn-danger btn-sm" href="bedelia_eliminar_registro.php?id=<?php echo $fila [''];?>">NoInscribirme</a>
                    
                    </td>
 
                 </tr>
                 
 
             <?php
             }
             ?>         
             
             </tbody>
 
 
 
     </table></div>
 
    
    <?php
      }else header("location:agregar.php");
    ?>  
     
     </section>    
 

  <?php
    include('footer.php');
  ?>
   
   <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
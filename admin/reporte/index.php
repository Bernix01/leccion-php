<?php
session_start();
if(!isset($_SESSION['login'])){
  header("Location: http://localhost/prueba/login/");
  exit();
}
require '../programa/colectorprograma.php';
require '../becario/colectorbecario.php';

    $colector= new ProgramaCollector();
    $colectorb = new BecarioCollector();
?>
<!Doctype html>
 <html>
     <head>
     </head>
     <body>
       <?php
       echo "Hola ".$_SESSION['login'];
       echo"<a href=/prueba/login/logout.php> Salir</a>";
        ?>
        <br>
        <a href="/prueba/admin">admin home</a>
        <table class="datos">
          <?php

            foreach ($colector->readAllPrograma() as $datos) {
              $id = $datos->getId();
                          foreach ($colectorb->getBecariosDePrograma($id) as $becario) {
                ?>


                     <tr>
                       <td> <?php echo $becario->getNombre(); ?> </td>
                        <td> <?php echo $datos->getNombre(); ?> </td>
                        <td> <?php echo $datos->getPais(); ?> </td>
                        </tr>
                   <?php
            }
          }
            ?>

</table>

</body>


</html>

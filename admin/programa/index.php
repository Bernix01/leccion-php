<?php
session_start();
if(!isset($_SESSION['login'])){
  header("Location: https://leccion-php.herokuapp.com/login/");
  exit();
}
require 'colectorprograma.php';

    $colector= new ProgramaCollector();
?>
<!Doctype html>
 <html>
     <head>
     </head>
     <body>
       <?php
       echo "Hola ".$_SESSION['login'];
       echo"<a href=/login/logout.php> Salir</a>";
        ?>
        <br>
        <a href="/admin">admin home</a>
        <table class="datos">
          <?php

            foreach ($colector->readAllPrograma() as $datos) {
                ?>

                     <tr>
                      <td> <?php echo $datos->getId(); ?> </td>
                       <td> <?php echo $datos->getNombre(); ?> </td>
                        <td> <?php echo $datos->getPais(); ?> </td>
                       <td><a href="editarprograma.php?id=<?php echo $datos->getId();?>"> Editar</a>  </td>
                       <td><a href="eliminarprograma.php?id=<?php echo $datos->getId();?>"> Eliminar</a>  </td>
                     </tr>
                   <?php
            }
            ?>

          <tr>
            <td colspan=4><a href="crearprograma.php">Crear Programa</a></td>
          </tr>

</table>

</body>


</html>

<?php
session_start();
if(!isset($_SESSION['login'])){
  header("Location: https://leccion-php.herokuapp.com/login/");
  exit();
}
require 'colectorbecario.php';

    $colector= new BecarioCollector();
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

            foreach ($colector->readAllBecario() as $datos) {
                ?>

                     <tr>
                      <td> <?php echo $datos->getId(); ?> </td>
                       <td> <?php echo $datos->getNombre(); ?> </td>
                       <td><a href="editarbecario.php?id=<?php echo $datos->getId();?>"> Editar</a>  </td>
                       <td><a href="eliminarbecario.php?id=<?php echo $datos->getId();?>"> Eliminar</a>  </td>
                     </tr>
                   <?php
            }
            ?>

          <tr>
            <td colspan=4><a href="crearbecario.php">Crear Becario</a></td>
          </tr>

</table>

</body>


</html>

<?php
session_start();
if(!isset($_SESSION['login'])){
  header("Location: https://leccion-php.herokuapp.com/prueba/login/");
  exit();
}
require 'colectorprograma.php';

    $coll = new ProgramaCollector();

if(isset($_GET["id"])){

    $obj = $coll->getNombre($_GET["id"]);

    ?>
    <form action="editarprograma.php" method="post">
      <div>
        <label for="name">Editando <?php echo $obj->getNombre(); ?> </label>
        <input type="hidden" name="id" value="<?php echo $obj->getId(); ?>">
        <input type="text" name="nombre" value="<?php echo $obj->getNombre(); ?>" placeholder="nombre"><br>
        <input type="text" name="pais" value="<?php echo $obj->getPais(); ?>" placeholder="programa"><br>
      </div>
      <div class="button">
        <button type="submit">Actualizar</button>
      </div>
    </form>

   <?php
}else if(isset($_POST["id"]) && isset($_POST["nombre"])){

    $obj = new Programa();
    $obj->setId($_POST["id"]);
    $obj->setNombre($_POST["nombre"]);
    $obj->setPais($_POST["pais"]);

      if($coll->updatePrograma($obj)){
          //var_dump($obj);

          header("Location: https://leccion-php.herokuapp.com/prueba/admin/programa");
          exit();
        }else{
            echo "Hubo un error al intentar actualizar el Programa.";
        }

}else{
    header("Location: https://leccion-php.herokuapp.com/prueba/admin/programa");
    exit();
}

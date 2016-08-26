<?php
session_start();
if(!isset($_SESSION['login'])){
  header("Location: http://localhost/prueba/login/");
  exit();
}
require 'colectorbecario.php';

    $coll = new BecarioCollector();

if(isset($_GET["id"])){

    $obj = $coll->getNombre($_GET["id"]);

    ?>
    <form action="editarbecario.php" method="post">
      <div>
        <label for="name">Crear nuevo becario </label>
        <input type="hidden" name="id" value="<?php echo $obj->getId(); ?>">
        <input type="text" name="nombre" value="<?php echo $obj->getNombre(); ?>" placeholder="nombre"><br>
        <input type="number" name="programa" value="<?php echo $obj->getPrograma(); ?>" placeholder="programa"><br>
      </div>
      <div class="button">
        <button type="submit">Crear</button>
      </div>
    </form>

   <?php
}else if(isset($_POST["id"]) && isset($_POST["nombre"])){

    $obj = new Becario();
    $obj->setId($_POST["id"]);
    $obj->setNombre($_POST["nombre"]);
    $obj->setPrograma($_POST["programa"]);

      if($coll->updateBecario($obj)){
          //var_dump($obj);

          header("Location: http://localhost/prueba/admin/becario");
          exit();
        }else{
            echo "Hubo un error al intentar actualizar el Becario.";
        }

}else{
    header("Location: http://localhost/prueba/admin/becario");
    exit();
}

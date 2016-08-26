<?php
session_start();
if(!isset($_SESSION['login'])){
  header("Location: https://leccion-php.herokuapp.com/login/");
  exit();
}
require 'colectorbecario.php';
if(isset($_POST["nombre"])){
  $vCollector = new BecarioCollector();


  $becario = new becario();
  $becario->setId(123);
  $becario->setNombre($_POST["nombre"]);
  $becario->setPrograma($_POST["programa"]);


      if($vCollector->addBecario($becario)){
          //var_dump($obj);

          header("Location: https://leccion-php.herokuapp.com/admin/becario");
          exit();
        }else{
            echo "Hubo un error al intentar agregar el Becario.";
        }

}else{
?>
  <html>

  <head>
  </head>

  <body>
    <form action="crearbecario.php" method="post">
      <div>
        <label for="name">Crear nuevo becario </label>
        <input type="text" name="nombre" value="Mickey" placeholder="nombre"><br>
        <input type="number" name="programa" value=1 placeholder="programa"><br>
      </div>
      <div class="button">
        <button type="submit">Crear</button>
      </div>
    </form>
  </body>

  </html>
<?php
     }

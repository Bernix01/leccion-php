<?php
session_start();
if(!isset($_SESSION['login'])){
  header("Location: https://leccion-php.herokuapp.com/login/");
  exit();
}
require 'colectorprograma.php';
if(isset($_POST["nombre"])){
  $vCollector = new ProgramaCollector();


  $programa = new programa();
  $programa->setId(123);
  $programa->setNombre($_POST["nombre"]);
  $programa->setPais($_POST["pais"]);


      if($vCollector->addPrograma($programa)){
          //var_dump($obj);

          header("Location: https://leccion-php.herokuapp.com/admin/programa");
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
    <form action="crearprograma.php" method="post">
      <div>
        <label for="name">Crear nuevo programa </label>
        <input type="text" name="nombre" value="Mickey" placeholder="nombre"><br>
        <input type="text" name="pais" value="Mouse" placeholder="programa"><br>
      </div>
      <div class="button">
        <button type="submit">Crear</button>
      </div>
    </form>
  </body>

  </html>
<?php
     }

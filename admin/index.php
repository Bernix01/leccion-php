<?php
session_start();
if(isset($_SESSION['login'])){
  echo "Hola ".$_SESSION['login'];
  echo"<a href=/prueba/login/logout.php> Salir</a>";
?>
<br>
<a href="/prueba/admin/becario/">Administrar Becarios</a>
<br>
<a href="/prueba/admin/programa/">Administrar Programa</a>
<br>
<a href="/prueba/admin/reporte/">Ver reporte</a>

  <?php
}else{
  header("Location: https://leccion-php.herokuapp.com/prueba/login/");
  exit();
}

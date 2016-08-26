<?php
session_start();
if(isset($_SESSION['login'])){
  echo "Hola ".$_SESSION['login'];
  echo"<a href=/login/logout.php> Salir</a>";
?>
<br>
<a href="/admin/becario/">Administrar Becarios</a>
<br>
<a href="/admin/programa/">Administrar Programa</a>
<br>
<a href="/admin/reporte/">Ver reporte</a>

  <?php
}else{
  header("Location: https://leccion-php.herokuapp.com/login/");
  exit();
}

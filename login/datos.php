<?php
session_start();
$nombre=$_POST['user'];

$clave=$_POST['pass'];

if($nombre=="yo" && $clave=="yo"){


	$_SESSION['login'] = $nombre;

}
header("Location: https://leccion-php.herokuapp.com/prueba/admin/");
  exit();
?>

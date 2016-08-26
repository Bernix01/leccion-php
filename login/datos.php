<?php
session_start();
$nombre=$_POST['user'];

$clave=$_POST['pass'];
var_dump($_POST);
if($nombre=="yo" && $clave=="yo"){


	$_SESSION['login'] = $nombre;

	header("Location: https://leccion-php.herokuapp.com/admin/");
	  exit();
}
?>

<?php
session_start();
if(!isset($_SESSION['login'])){
  header("Location: https://leccion-php.herokuapp.com/prueba/login/");
  exit();
}
require 'colectorbecario.php';

    $coll = new BecarioCollector();

if(isset($_GET["id"])){

    $obj = $coll->deleteBecario($_GET["id"]);
    header("Location: https://leccion-php.herokuapp.com/prueba/admin/becario");
    exit();
}else{
  echo "Valor no encontrado.";
}

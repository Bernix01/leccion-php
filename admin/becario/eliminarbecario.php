<?php
session_start();
if(!isset($_SESSION['login'])){
  header("Location: https://leccion-php.herokuapp.com/login/");
  exit();
}
require 'colectorbecario.php';

    $coll = new BecarioCollector();

if(isset($_GET["id"])){

    $obj = $coll->deleteBecario($_GET["id"]);
    header("Location: https://leccion-php.herokuapp.com/admin/becario");
    exit();
}else{
  echo "Valor no encontrado.";
}

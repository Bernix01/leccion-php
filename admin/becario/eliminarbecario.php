<?php
session_start();
if(!isset($_SESSION['login'])){
  header("Location: http://localhost/prueba/login/");
  exit();
}
require 'colectorbecario.php';

    $coll = new BecarioCollector();

if(isset($_GET["id"])){

    $obj = $coll->deleteBecario($_GET["id"]);
    header("Location: http://localhost/prueba/admin/becario");
    exit();
}else{
  echo "Valor no encontrado.";
}

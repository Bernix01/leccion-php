<?php
session_start();
if(!isset($_SESSION['login'])){
  header("Location: http://localhost/prueba/login/");
  exit();
}
require 'colectordemo.php';

    $coll = new DemoCollector();

if(isset($_GET["id"])){

    $obj = $coll->deleteDemo($_GET["id"]);
    header("Location: http://localhost/prueba/admin/demo");
    exit();
}else{
  echo "Valor no encontrado.";
}

<?php
session_start();
if(!isset($_SESSION['login'])){
  header("Location: https://leccion-php.herokuapp.com/login/");
  exit();
}
require 'colectordemo.php';

    $coll = new DemoCollector();

if(isset($_GET["id"])){

    $obj = $coll->deleteDemo($_GET["id"]);
    header("Location: https://leccion-php.herokuapp.com/admin/demo");
    exit();
}else{
  echo "Valor no encontrado.";
}

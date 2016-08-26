<?php
session_start();
if(!isset($_SESSION['login'])){
  header("Location: https://leccion-php.herokuapp.com/prueba/login/");
  exit();
}
require 'colectorprograma.php';

    $coll = new ProgramaCollector();

if(isset($_GET["id"])){

    $obj = $coll->deletePrograma($_GET["id"]);
    header("Location: https://leccion-php.herokuapp.com/prueba/admin/programa");
    exit();
}else{
  echo "Valor no encontrado.";
}

<?php
session_start();
if(!isset($_SESSION['login'])){
  header("Location: http://localhost/prueba/login/");
  exit();
}
require 'colectorprograma.php';

    $coll = new ProgramaCollector();

if(isset($_GET["id"])){

    $obj = $coll->deletePrograma($_GET["id"]);
    header("Location: http://localhost/prueba/admin/programa");
    exit();
}else{
  echo "Valor no encontrado.";
}

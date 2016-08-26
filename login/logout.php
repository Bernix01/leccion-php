<?php
session_start();
if(isset($_SESSION['login'])){
  session_destroy();
  header("Location: https://leccion-php.herokuapp.com/prueba/login/");
  exit();
}
?>

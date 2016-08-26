<?php
  require_once '../utils/collector.php';
  require 'programa.php';
  class ProgramaCollector extends Collector {

   function __construct()
   {
    parent::__construct();
   }

   public function addPrograma($programa)
   {
     return self::execQuery("INSERT INTO programa(nombre,pais) VALUES('".$programa->getNombre()."','".$programa->getPais()."')");
   }

   public function getNombre($id)
   {

    $stmt = $this->con->prepare("SELECT * FROM programa WHERE id=:id");
    $stmt->execute(array(":id"=>$id));
    $usuario=$stmt->fetchObject("Programa");
    return $usuario;
   }
   public function readAllprograma(){

      return self::read('programa','programa');


  }

   public function updatePrograma($programa)
   {
    try
    {
      self::execQuery("UPDATE programa SET id='".$programa->getId()."',nombre='".$programa->getNombre()."',pais='".$programa->getPais()."' WHERE id=".$programa->getId());

     return true;
    }
    catch(PDOException $e)
    {
     echo $e->getMessage();
     return false;
    }
   }

   public function deletePrograma($programa)
   {
    try
    {
      self::execQuery("DELETE FROM programa WHERE id=".$programa);

     return true;
    }
    catch(PDOException $e)
    {
     echo $e->getMessage();
     return false;
    }
   }
}
?>

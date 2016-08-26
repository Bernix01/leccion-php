<?php
ini_set('display_errors', '1');
  require_once '../utils/collector.php';
  require 'becario.php';
  class BecarioCollector extends Collector {

   function __construct()
   {
    parent::__construct();
   }

   public function addBecario($becario)
   {
     return self::execQuery("INSERT INTO becario(nombre,fk_id_prog) VALUES('".$becario->getNombre()."','".$becario->getPrograma()."')");
   }

   public function getNombre($id)
   {

    $stmt = $this->con->prepare("SELECT * FROM becario WHERE id=:id");
    $stmt->execute(array(":id"=>$id));
    $usuario=$stmt->fetchObject("Becario");
    return $usuario;
   }
   public function readAllbecario(){

      return self::read('becario','becario');


  }

   public function updateBecario($becario)
   {
    try
    {
      self::execQuery("UPDATE becario SET id='".$becario->getId()."',nombre='".$becario->getNombre()."',fk_id_prog='".$becario->getPrograma()."' WHERE id=".$becario->getId());

     return true;
    }
    catch(PDOException $e)
    {
     echo $e->getMessage();
     return false;
    }
   }

   public function deleteBecario($becario)
   {
    try
    {
      self::execQuery("DELETE FROM becario WHERE id=".$becario);

     return true;
    }
    catch(PDOException $e)
    {
     echo $e->getMessage();
     return false;
    }
   }

   public function getBecariosDePrograma($idPrograma){
     try
     {
       $query = ("SELECT * FROM becario WHERE fk_id_prog=".$idPrograma);
       $stmt = $this->con->prepare($query);
       $stmt->execute();
       $result = $stmt->fetchAll(PDO::FETCH_CLASS, "becario");
       return $result;
     }
     catch(PDOException $e)
     {
      echo $e->getMessage();
      return false;
     }
   }
}
?>

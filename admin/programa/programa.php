<?php


 class Programa {

  private $id;
  private $nombre;
  private $pais;

  public function __construct(){

  }

  public function getId(){
    return $this->id;
  }

  public function getNombre(){
    return $this->nombre;
  }

  public function getPais(){
    return $this->pais;
  }

  public function setId($id){
    $this->id = $id;
  }

  public function setNombre($nombre){
    $this->nombre = $nombre;
  }

  public function setPais($i){
    $this->pais = $i;
  }


}

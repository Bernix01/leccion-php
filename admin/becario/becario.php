<?php

 class Becario {

  private $id;
  private $nombre;
  private $fk_id_prog;

  public function __construct(){

  }

  public function getId(){
    return $this->id;
  }

  public function getNombre(){
    return $this->nombre;
  }

  public function getPrograma(){
    return $this->fk_id_prog;
  }

  public function setId($id){
    $this->id = $id;
  }

  public function setNombre($nombre){
    $this->nombre = $nombre;
  }

  public function setPrograma($i){
    $this->fk_id_prog = $i;
  }

}

<?php

 class Demo {

  private $id;
  private $nombre;
  private $pimage;

  public function __construct(){

  }

  public function getId(){
    return $this->id;
  }

  public function getNombre(){
    return $this->nombre;
  }

  public function getImage(){
    return $this->pimage;
  }

  public function setId($id){
    $this->id = $id;
  }

  public function setNombre($nombre){
    $this->nombre = $nombre;
  }

  public function setPimage($i){
    $this->pimage = $i;
  }

}

<?php
/**
 *
 */
class dbGoT{
  private $conexion;
  private $errorConexion=false;

  function __construct(){
    $this->conexion = new mysqli("localhost", "root", "root", "gameofthrones");
    if ($this->conexion->connect_errno) {
      $this->errorConexion=true;
    }
  }
  public function getErrorConexion(){
    return $this->errorConexion;
  }
  public function titles(){
   return $this->conexion->query("SELECT * FROM titles");
 }

 public function actores(){
   return $this->conexion->query("SELECT * FROM cast");
 }

 public function actEpisodio(){
   return $this->conexion->query("SELECT * FROM season_ep");
 }
}


?>

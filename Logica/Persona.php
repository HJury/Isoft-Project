<?php
  include_once 'Perfil.php';
abstract class Persona{
  private $nombres; 
  private $cedula;
  private $Perfil;   //Pefil
  private $apellidos;
  private $telefono; 			//Atributos


  abstract public function inDatos();
  abstract public function inDaSes($Perfil);
}
 

?>
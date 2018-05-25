<?php
 
abstract class Persona{
  private $nombres; 
  private $cedula;
  private $contraseña;   //Atributos
  private $email;
  private $apellidos;
  private $telefono; 			//Atributos


  abstract public function inDatos();
  abstract public function inDaSes($Email, $Contraseña);
}
 

?>
<?php
 
abstract class Persona{
  private $cedula;
  private $nombres; 			//Atributos
  private $perfil;
  private $apellidos;
  private $telefono; 			//Atributos


  abstract public function iniciarSesion($Perfil);
  abstract public function registrarse($Nombres,$Apellidos,$Cedula,$Perfil,$Telefono);
}
 

?>
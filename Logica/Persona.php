<?php
 
abstract class Persona{
  private $cedula;
  private $nombres; 			//Atributos
  private $perfil;
  private $apellidos;
  private $telefono; 			//Atributos


  abstract public function InDaSesion($Email, $Contraseña);
  abstract public function InDaUsuario($Nombres, $Apellidos, $Cedula, $Email, $Telefono, $Contraseña);
}
 

?>
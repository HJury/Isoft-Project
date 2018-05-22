<?php
 include 'Persona.php'; 
 include 'Persistencia.php';
 include 'Perfil.php'; 
public class Administrado extends Persona{
 			//Atributos
		public function __construct($cont,$email){ 
		 $contraseña = $cont; 
		 this->$email =$email; 
        } 

  public function inDaSesion($Perfil){
  	 private $Perci = new Persistencia;
  	if($Perci->iniciarSesion($Perfil)){
  		
  	}else{

  	}

  }
  public function registrarse($Nombres,$Apellidos,$Cedula,$Perfil,$Telefono,$ClaveA){

  }
}
 
 
?>
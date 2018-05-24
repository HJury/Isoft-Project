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


}
 
 
?>
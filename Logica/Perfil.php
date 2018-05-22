<?php


	public class Perfil{
	private $contraseña;
	private $email;

	public function __construct($cont,$email){ 
		 $contraseña = $cont; 
		 this->$email =$email; 
        } 

    public function getEmail(){
    	return this->$email;
    }

    public function getContraseña(){
    	return this->$contraseña;
    }

} 
?>
<?php


	 class Perfil{
	private $contraseña;
	private $email;

	public function __construct($cont,$email){ 
		 $this->contraseña = $cont; 
		 $this->email =$email; 
        } 
    

    public function getEmail(){
    	return $this->email;
    }

    public function getContraseña(){
    	return $this->contraseña;
    }

      public function setEmail($Email){
         $this->email = $Email;
    }

    public function setContraseña($Contraseña){
         $this->contraseña = $Contraseña; 
    }


} 
?>
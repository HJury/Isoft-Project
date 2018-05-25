<?php
 include_once 'Persona.php'; 
 include_once 'Fachada.php'; 
 class Cliente extends Persona{
 			//Atributos
	public function __construct($Nombres, $Apellidos, $Cedula, $Email, $Telefono, $Contraseña){ 
         $this->Perfil = new Perfil($Contraseña,$Email);
		 $this->nombres = $Nombres; 
         $this->cedula = $Cedula;
         $this->apellidos = $Apellidos;
         $this->telefono = $Telefono; 

    } 

    public function inDatos(){
        $fac = new Fachada();

        if($fac->inDaCli($this->nombres, $this->apellidos, $this->cedula, $this->Perfil->getEmail(), $this->telefono, $this->Perfil->getContraseña())){
            return true; 
        }else{
            return false;
        }
    }

    public function inDaSes($Perfil){

    }


    }
 
 
?>
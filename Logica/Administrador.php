<?php
 include_once 'Persona.php'; 
 include_once 'Fachada.php'; 
 class Administrador extends Persona{
 			//Atributos
		public function __construct($Nombres, $Apellidos, $Cedula, $Email, $Telefono, $Contraseña){ 
		 $this->nombres = $Nombres; 
     $this->contraseña = $Contraseña; 
		 $this->email =$Email; 
     $this->cedula = $Cedula;
     $this->apellidos = $Apellidos;
     $this->telefono = $Telefono; 

        } 

    public function inDatos(){
        $fac = new Fachada();

        if($fac->inDaAdmin($this->nombres, $this->apellidos, $this->cedula, $this->email, $this->telefono, $this->contraseña)){
            return true; 
        }else{
            return false;
        }
    }

    public function inDaSes($Email, $Contraseña){

    }


    }
 
 
?>
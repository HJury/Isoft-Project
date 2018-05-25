<?php
 include_once 'Persona.php'; 
 include_once 'Fachada.php'; 
 include_once 'Perfil.php';
 class Administrador extends Persona{
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

        if($fac->inDaAdmin($this->nombres, $this->apellidos, $this->cedula, $this->Perfil->getEmail(), $this->telefono, $this->Perfil->getContraseña())){
            return true; 
        }else{
            return false;
        }
    }

    public function inDaSes($Perfil){
      $fac = new Fachada();
      
       $row = $fac->inDaSes($Perfil);

        return $row;
     
      /*}else{
        return false;
      }*/


    }


    }
 
 
?>
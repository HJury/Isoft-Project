<?php
 include_once 'Persona.php'; 
 include_once 'Agenda.php'; 
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
        $age = new Agenda();

        if($age->inDaAdmin($this->nombres, $this->apellidos, $this->cedula, $this->Perfil->getEmail(), $this->telefono, $this->Perfil->getContraseña())){
            return true; 
        }else{
            return false;
        }
    }

    public function inDaSes(){
      $age = new Agenda();
      
       $row = $age->inDaSes($this->Perfil);

        return $row;
     
      
    }

    public function modHorario($Hor){
        $Age = new Agenda();
        if($Age->modHorario($Hor)){

            return true;
        }else{
            return false;
        }
    }

    public function inMercancia($Cedula,$Mer,$Nombres,$Pri){
        $mer = new Mercancia($Mer,$Nombres,$Cedula,$Pri);
        $Age = new Agenda();
        if($Age->inMercancia($mer)){                                                  

            return true;
        }else{
            return false;
        }
    }

    public function coEstado(){

      
    }


    }
 
 
?>
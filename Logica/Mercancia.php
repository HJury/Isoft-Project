<?php

class Mercancia{
 
 	private $id;
 	private $nombre;
 	private $idPropietario;
 	private $prioridad; 
	public function __construct($id, $Nombre, $idPropietario, $prioridad){ 
      
     $this->id = $id;
	 $this->nombre = $Nombre; 
     $this->idPropietario = $idPropietario;
     $this->prioridad = $prioridad; 

        }


        public function getId(){
    	return $this->id;
    }

    public function getNombre(){
    	return $this->nombre;
    }

    public function getIdPropietario(){
    	return $this->idPropietario;
    }

    public function getPrioridad(){
    	return $this->prioridad;
    }

      public function setId($id){
         $this->id = $id;
    }

    public function setNombre($Nombre){
         $this->nombre = $Nombre; 
    }

     public function setIdPropietario($idPropietario){
         $this->idPropietario = $idPropietario;
    }

    public function setPrioridad($Prioridad){
         $this->prioridad = $Prioridad; 
    } 

}



?>
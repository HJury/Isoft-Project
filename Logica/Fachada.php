<?php
include_once 'Persistencia.php'; 

 class Fachada{

     

	public function __construct(){ 
        } 

        public function inDaAdmin($Nombres, $Apellido, $Cedula, $Email, $Telefono, $Contraseña){
        	$Persi = new Persistencia();
        	if($Persi->inDaAdmin($Nombres, $Apellido, $Cedula, $Email, $Telefono, $Contraseña)){
        		return true;
        	}else{
        		return false;
        	}


        }
         public function inDaCli($Nombres, $Apellido, $Cedula, $Email, $Telefono, $Contraseña){
            $Persi = new Persistencia();
            if($Persi->inDaCli($Nombres, $Apellido, $Cedula, $Email, $Telefono, $Contraseña)){
                return true;
            }else{
                return false;
            }


        }


         public function inDaSes($Perfil){
                $Persi = new Persistencia();
                $row = $Persi->verificarSesion($Perfil);
                 return $row;  

                
             


        }

}


?>
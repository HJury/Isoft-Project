<?php
include 'Persistencia.php'; 

 class Fachada{

	public function __construct(){ 
        } 

        public function InDaUsuario($Nombres, $Apellido, $Cedula, $Email, $Telefono, $Contraseña){
        	$Persi = new Persistencia();
        	if($Persi->InDaUsuario($Nombres, $Apellido, $Cedula, $Email, $Telefono, $Contraseña)){
        		return true;
        	}else{
        		return false;
        	}


        }


         public function InDaSesion($Email, $Contraseña){
                $Persi = new Persistencia();

                 $row = $Persi->verificarSesion($Email, $Contraseña);
                 return $row;  //
               // if($row == '0'){
               //  
               // }else{
                //        return false;
                //}


        }

}


?>
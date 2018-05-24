<?php
 include 'Persona.php'; 
 include 'Fachada.php'; 
 class Administrador extends Persona{
 			//Atributos
		public function __construct($cont,$Email){ 
		 $contraseña = $cont; 
		 $email =$Email; 
        } 

    public function InDaUsuario($Nombres, $Apellidos, $Cedula, $Email, $Telefono, $Contraseña){
      $Facha = new Fachada();
       if($Facha->InDaUsuario($Nombres, $Apellidos, $Cedula, $Email, $Telefono, $Contraseña)){
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
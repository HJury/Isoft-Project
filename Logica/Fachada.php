<?php
include_once 'Persistencia.php'; 
include_once 'Administrador.php';
include_once 'Cliente.php';
 class Fachada{

     

	public function __construct(){  //Constructor
        } 

        public function inDaAdmin($Nombres, $Apellidos, $Cedula, $Email, $Telefono, $Contraseña){ 

            $adm = new Administrador($Nombres, $Apellidos, $Cedula, $Email, $Telefono, $Contraseña);

                        if($adm->inDatos()){
                                return true;
                        }else{
                                return false;
                        }
  
        }



         public function inDaCli($Nombres, $Apellido, $Cedula, $Email, $Telefono, $Contraseña){
            $Cli = new Cliente($Nombres, $Apellido, $Cedula, $Email, $Telefono, $Contraseña);
            if($Cli->inDatos()){
                return true;
            }else{
                return false;
            }


        }


         public function inDaSes($Nombres, $Apellidos, $Cedula, $Email, $Telefono, $Contraseña){
                $Adm = new Administrador($Nombres, $Apellidos, $Cedula, $Email, $Telefono, $Contraseña);
                $row = $Adm->inDaSes();
                 return $row;  
        }
                
 

            public function outHorario(){
                $age = new Agenda();
                $row = $age->outHorario();
                return $row;

             }


         public function modHorario($Hor){

            $adm = new Administrador($Nombres, $Apellidos, $Cedula, $Email, $Telefono, $Contraseña);
            if($adm->modHorario($Hor)){
                return true;
            }
            else{
                return false;
            }
           

         }

          public function inMercancia($Cedula,$Mer,$Nombres,$Pri){
             $Adm= new Administrador($Nombres, $Apellidos, $Cedula, $Email, $Telefono, $Contraseña);
             if($Adm->inMercancia($Cedula,$Mer,$Nombres,$Pri)){
                return true;
             }else{
                return false;
             }

         }


        

}


?>
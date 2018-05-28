<?php 


 class Agenda{



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

   		public function outHorario(){
                $Persi = new Persistencia();
                $row = $Persi->outHorario();
                return $row;

             }


        public function inMercancia($Mer){
        $Persi = new Persistencia();
        if($Persi->inMercancia($Mer->getIdPropietario(),$Mer->getId(),$Mer->getNombre(),$Mer->getPrioridad())){                                                  

            return true;
        }else{
            return false;
        }
    }

  public function modHorario($Hor){
       $Persi= new Persistencia();
             if($Persi->modHorario($Hor)){
                return true;
             }else{
                return false;
             }
    }

     

        

 }


?>

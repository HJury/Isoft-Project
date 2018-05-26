<?php

 
 class Persistencia{

	public function __construct(){ 
        } 

  public function buscarPedido($Pedido){

  }
  public function consultarDatos($Bdatos){

  }
  public function consultarHorario(){

  }
  public function guardarPedido($Pedido){

  }
    public function inDaAdmin($Nombres, $Apellido, $Cedula, $Email, $Telefono, $Contraseña){
      $Tipo = "Administrador";
    
      $EnlanceBD = mysql_connect(localhost, root, losimepeenelcadelavi) or die("No se conecta a la base de datos");
      mysql_select_db(isoft, $EnlanceBD) or die("No se puede seleccionar la BD");

      mysql_query("INSERT INTO usuarios VALUES('$Nombres', '$Apellido', '$Cedula', '$Contraseña', '$Email', '$Telefono', '$Tipo') ");
     return true;


  }

   public function inDaCli($Nombres, $Apellido, $Cedula, $Email, $Telefono, $Contraseña){
      $Tipo = "Cliente";
    
      $EnlanceBD = mysql_connect(localhost, root, losimepeenelcadelavi) or die("No se conecta a la base de datos");
      mysql_select_db(isoft, $EnlanceBD) or die("No se puede seleccionar la BD");
      $result = mysql_query("SELECT * from usuarios where Email='" . $Perfil->getEmail() . "'");
      if($row = mysql_fetch_array($result)){
      if($row['Email'] == $Email || $row['Cedula']){

      mysql_query("INSERT INTO usuarios VALUES('$Nombres', '$Apellido', '$Cedula', '$Contraseña', '$Email', '$Telefono', '$Tipo') ");
     return true;
      }else{
        return false;
      }
    }else{
      return false; 
    }

  }

  public function verificarSesion($Perfil){
    $Email = $Perfil->getEmail();
  	mysql_connect('localhost','root','losimepeenelcadelavi') or die("Error al conectar " . mysql_error());
	   mysql_select_db('isoft') or die ("Error al seleccionar la Base de datos: " . mysql_error()); //Conexión a la base de datos

	  $result = mysql_query("SELECT * from usuarios where Email='" . $Perfil->getEmail() . "'");

	if($row = mysql_fetch_array($result)){
	if($row['Contraseña'] == $Perfil->getContraseña()) {
	   $Cedula = $row['Cedula'];
     $Nombres = $row['Nombres'];
     $Tipo = $row['Tipo'];

     $array["Cedula"] = "$Cedula";
     $array["Nombres"] = "$Nombres";
     $array["Tipo"]  = "$Tipo";

		return $array; 
	}else{
		
		return false;  //header("Location: contenido.php");
		  
	}

  }else{
    return false;
  }
}

public function outHorario(){
      mysql_connect('localhost','root','losimepeenelcadelavi') or die("Error al conectar " . mysql_error());
      mysql_select_db('isoft') or die ("Error al seleccionar la Base de datos: " . mysql_error()); //Conexión a la base de datos

        $result = mysql_query("SELECT * from horario ");
        if($row = mysql_fetch_array($result)){
           $Horario = $row['horario'];
           
           $array["Horario"]  = "$Horario";

          return $array; 
      

        }else{
          return false;
        }
}


}
 
 
?>
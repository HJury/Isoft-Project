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
    public function InDaUsuario($Nombres, $Apellido, $Cedula, $Email, $Telefono, $Contraseña){
      $Tipo = "Cliente";
    
      $EnlanceBD = mysql_connect(localhost, root, losimepeenelcadelavi) or die("No se conecta a la base de datos");
      mysql_select_db(isoft, $EnlanceBD) or die("No se puede seleccionar la BD");

      mysql_query("INSERT INTO usuarios VALUES('$Nombres', '$Apellido', '$Cedula', '$Contraseña', '$Email', '$Telefono', '$Tipo') ");
    echo "rojo";


  }
  public function verificarSesion($Email, $Contraseña){
  	mysql_connect('localhost','root','losimepeenelcadelavi') or die("Error al conectar " . mysql_error());
	   mysql_select_db('isoft') or die ("Error al seleccionar la Base de datos: " . mysql_error()); //Conexión a la base de datos

	$result = mysql_query("SELECT * from usuarios where Email='" . $Email . "'");

	if($row = mysql_fetch_array($result)){
	if($row['Contraseña'] == $Contraseña) {
	   $Cedula = $row['Cedula'];
     $Nombres = $row['Nombres'];

     $array["Cedula"] = "$Cedula";
     $array["Nombres"] = " $Nombres";

		return $array; 
	}else{
		
		return false;  //header("Location: contenido.php");
		  
	}

  }
} 

}
 
 
?>
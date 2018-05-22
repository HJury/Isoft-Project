<?php
 include 'Perfil';
public class Persistencia{

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
  public function buscarPedido($id){

  	return $Pedido;
  }
  public function verificarSesion($Perfil){
  	private $boo = True;
  	mysql_connect('localhost','root','losimepeenelcadelavi') or die("Error al conectar " . mysql_error());
	mysql_select_db('isoft') or die ("Error al seleccionar la Base de datos: " . mysql_error()); //Conexión a la base de datos

	$result = mysql_query("SELECT * from usuarios where Email='" . $Perfil->getEmail() . "'");

	if($row = mysql_fetch_array($result)){
	if($row['Contraseña'] == $Perfil->getContraseña()) {
		session_start();

		return $row; 
	}else{
		$boo = False;
		return $boo;  //header("Location: contenido.php");
		exit();
	}

  }
  public function buscarPedido($Pedido){

  }
}
 
 
?>
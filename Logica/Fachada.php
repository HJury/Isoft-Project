<?php

	$Email = $_POST['Ema'];
	$Contraseña = $_POST['Cont'];
include 'Administrador.php'	
include 'Persistencia.php'
include 'Perfil.php'
public class fachada{
	public function comUsuario($contraseña,$email){
		$Perci = new Persistencia();
		$Per = new Perfil($email,$contraseña)
		if(strcmp($Perci->verificarSesion($Per)->tipo , "Cliente") == 0){
			header("Location: contenido.php");
		}  
	}
}

?>
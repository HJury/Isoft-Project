<?php

	$Nombres = $_POST['Nom'];
	$Apellidos = $_POST['Ape'];
	$Cedula = $_POST['Ced'];
	$Email = $_POST['Ema'];
	$Telefono = $_POST['Tel'];
	$Contraseña = $_POST['Cont'];
include '../Logica/Fachada.php';

	if(!empty($_POST['Nom'])){

	$fac = new Fachada();
	if($fac->InDaUsuario($Nombres, $Apellidos, $Cedula, $Email, $Telefono, $Contraseña)){
		echo "El poder hermano";
	}else{
		echo "Nada de poder Hermano";
	}

	}
?>

	



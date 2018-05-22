<?php

	$Nombres = $_POST['Nom'];
	$Apellidos = $_POST['Ape'];
	$Cedula = $_POST['Ced'];
	$Email = $_POST['Ema'];
	$Telefono = $_POST['Tel'];
	$Contraseña = $_POST['Cont'];
	$Acc =$_POST['Acc'];
include '../Logica/Fachada.php';

	if($Acc == "Reg"){
		if(!empty($_POST['Nom'])){

				$fac = new Fachada();

				if($fac->InDaUsuario($Nombres, $Apellidos, $Cedula, $Email, $Telefono, $Contraseña)){
						header('Location: prueba.html');
				}else{
						echo "Nada de poder Hermano";
				}

				}

	}

	if($Acc == "Ses"){
		$fac = new Fachada();

		if($fac->InDaSesion($Email, $Contraseña)){
				header('Location:  prueba.html');
		}else{
				echo "Nada de poder Hermano";
		}
	}
?>

	



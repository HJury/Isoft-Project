<?php

	$Nombres = $_POST['Nom'];
	$Apellidos = $_POST['Ape'];
	$Cedula = $_POST['Ced'];
	$Email = $_POST['Ema'];
	$Telefono = $_POST['Tel'];
	$Contraseña = $_POST['Cont'];
	$Acc =$_POST['Acc'];
include '../Logica/Administrador.php';

	if($Acc == "Reg"){
		if(!empty($_POST['Nom'])){

				$Adm = new Administrador();

				if($Adm->InDaUsuario($Nombres, $Apellidos, $Cedula, $Email, $Telefono, $Contraseña)){
						echo "We can ";
				}else{
						echo "Nada de poder Hermano";
				}

		}else{
					echo "Nadaaa";
		}

	}

	if($Acc == "Ses"){
		$fac = new Fachada();
		$row = $fac->InDaSesion($Email, $Contraseña);
		echo json_encode($row);
		//if($row != '0'){

			//$array=array(
				// "empleados"=>array(
				//  array("nombre"=>"eugenio","edad"=>"33"),
				//  array("nombre"=>"eugenio","edad"=>"33")
				// ),
				// "autos"=>array(
				//  array("marca"=>"Ford","modelo"=>"2016"),
				//  array("marca"=>"Nissan","modelo"=>"2015"),
				//  array(
				//   "marca"=>array(
				//    array("submarca"=>"sub0"),
				//    array("submarca"=>"sub1"),
				//    array("submarca"=>"sub2")
				//   )
				//  )
				// )
//
				//);
				
		//}else{
			//	echo "Nada de poder Hermaano";
		//}
	}
?>

	



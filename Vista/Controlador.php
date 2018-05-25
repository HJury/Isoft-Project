<?php

	$Nombres = $_POST['Nom'];
	$Apellidos = $_POST['Ape'];
	$Cedula = $_POST['Ced'];
	$Email = $_POST['Ema'];
	$Telefono = $_POST['Tel'];
	$Contraseña = $_POST['Cont'];
	$Acc =$_POST['Acc'];
	$Tipo = $_POST['Tip'];
include_once '../Logica/Administrador.php';
include_once '../Logica/Cliente.php';
include_once '../Logica/Perfil.php';
 
	if($Acc == "Reg"){
		if($Tipo == "Adm"){ // Se verifica si los datos ingresados medidante la interfaz son de un usuario tipo adminitrador. 
		if(!empty($_POST['Nom'])){

				$adm = new Administrador($Nombres, $Apellidos, $Cedula, $Email, $Telefono, $Contraseña);

						if($adm->inDatos()){
								echo "Todo bien Todo bien";
						}else{
								echo "Nada de poder Hermano";
						}

				}
			}
			if($Tipo == "Cli"){ // Se verifica si los datos ingresados medidante la interfaz son de un usuario tipo cliente. 
				if(!empty($_POST['Nom'])){

						$cli = new Cliente($Nombres, $Apellidos, $Cedula, $Email, $Telefono, $Contraseña);

						if($cli->inDatos()){
								echo "Todo bien Todo bien";
						}else{
								echo "Nada de poder Hermano";
						}

				}


			} 

	}

	if($Acc == "Ses"){

		$adm = new Administrador($Nombres, $Apellidos, $Cedula, $Email, $Telefono, $Contraseña);
		$Perfil = new Perfil($Contraseña,$Email);
		$row = $adm->InDaSes($Perfil);
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

	



<?php

	$Nombres = $_POST['Nom'];
	$Apellidos = $_POST['Ape'];
	$Cedula = $_POST['Ced'];
	$Email = $_POST['Ema'];
	$Telefono = $_POST['Tel'];
	$Contraseña = $_POST['Cont'];
	$Acc =$_POST['Acc'];
	$Tipo = $_POST['Tip'];
	$Hor = $_POST['Hor'];
	$Mer = $_POST['Mer'];
	$Pri = $_POST['Pri'];

include_once '../Logica/Administrador.php';
include_once '../Logica/Cliente.php';
include_once '../Logica/Perfil.php';
include_once '../Logica/Fachada.php';
 
	if($Acc == "Reg"){
		if($Tipo == "Adm"){ // Se verifica si los datos ingresados medidante la interfaz son de un usuario tipo adminitrador. 
		if(!empty($_POST['Nom'])){

				$adm = new Administrador($Nombres, $Apellidos, $Cedula, $Email, $Telefono, $Contraseña);

						if($adm->inDatos()){
								echo "El administrador fue registrado satisfactoriamente.";
						}else{
								echo "Hubo un error al registrar cliente, verifique los datos.";
						}

				}
			}
			if($Tipo == "Cli"){ // Se verifica si los datos ingresados medidante la interfaz son de un usuario tipo cliente. 
				if(!empty($_POST['Nom'])){

						$cli = new Cliente($Nombres, $Apellidos, $Cedula, $Email, $Telefono, $Contraseña);

						if($cli->inDatos()){
								echo "El cliente fue registrado satisfactoriamente.";
						}else{
								echo "Hubo un error al registrar cliente, verifique los datos.";
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

	if($Tipo =="TraD" ){
		$fac = new Fachada();
		$row = $fac->outHorario();

		echo json_encode($row);

	}


	if($Hor != ""){
		$adm = new Administrador($Nombres, $Apellidos, $Cedula, $Email, $Telefono, $Contraseña);
		if($adm->modHorario($Hor)){
			return true;
		}
		else{
			return false;
		}
	}

	if($Mer != ""){
		$adm = new Administrador($Nombres, $Apellidos, $Cedula, $Email, $Telefono, $Contraseña);
		if($adm->inMercancia($Cedula,$Mer,$Nombres,$Pri)){
			return true;
		}
		else{
			return false;
		}
	}
?>

	



<?php

	$Nombres = $_POST['Nom']; //Nombre de: Cliente, Administrador, conductor o Mercancia, dependiendo del archivo del que provenga la información	
	$Apellidos = $_POST['Ape']; //Apellido de los usuarios que planean registrarse
	$Cedula = $_POST['Ced']; //Cedula de: Cliente, Administrador o conductor.
	$Email = $_POST['Ema']; //Email de Usuario, usado para registrarse o validar su información al momento de iniciar sesión. 
	$Telefono = $_POST['Tel']; //Telefono de Usuario que planea registrarse. 
	$Contraseña = $_POST['Cont']; //Contraseña que puede ser definida al momento de registrarse o validada antes de iniciar sesión.
	$Acc =$_POST['Acc'];  //Indica si la información proviene de la pagina de registro o de la pagina de inición de sesión 
	$Tipo = $_POST['Tip']; //Indica el tipo de usuario que planea registrarse .
	$Hor = $_POST['Hor'];	//El horario que se recibe despues de haberse realizado cambios sobre. 
	$Mer = $_POST['Mer'];	//Numero identificador de mercancia al momento de agregarla a la base de datos.
	$Pri = $_POST['Pri'];	//Prioridad que tiene la mercancia.

	//Este documento hace de Clase controlador en la documentación anexada a este documento, ademas hace de conector entre las interfaces de usuario y los documentos php, por esta razón
	//y por la incapacidad que se tiene para con el lenguaje "JavaScript" y su  manipulación de objetos php....

include_once '../Logica/Administrador.php';
include_once '../Logica/Cliente.php';
include_once '../Logica/Perfil.php';
include_once '../Logica/Fachada.php';
include_once '../Logica/Mercancia.php'; //Se importan los documentos que contienen las clases necesarias para el correcto funcionamiento del programa.



	if($Acc == "Reg"){  //Ejecución de la funcion de registrar Usuario
		if($Tipo == "Adm"){ // Se verifica si los datos ingresados medidante la interfaz son de un usuario tipo adminitrador. 
				$fac = new Fachada();

				if($fac->inDaAdmin($Nombres, $Apellidos, $Cedula, $Email, $Telefono, $Contraseña)){
								echo "El administrador fue registrado satisfactoriamente.";
				}else{
								echo "Hubo un error al registrar cliente, verifique los datos.";
				}
			
		}
			if($Tipo == "Cli"){ // Se verifica si los datos ingresados medidante la interfaz son de un usuario tipo cliente. 
						$fac = new Fachada();

						if($fac->inDaCli($Nombres, $Apellidos, $Cedula, $Email, $Telefono, $Contraseña)){
								echo "El cliente fue registrado satisfactoriamente.";
						}else{
								echo "Hubo un error al registrar cliente, verifique los datos.";
							}
				
			} 
	}









	if($Acc == "Ses"){ //Efecución de la función de ingresar datos de inicio de sesión

		$fac = new Fachada();
		$row = $fac->InDaSes($Nombres, $Apellidos, $Cedula, $Email, $Telefono, $Contraseña);
		echo json_encode($row);//Se retorna la variable haciendo un casteo a Json para facilitar su manipulación en interfaz de usuario/administrador

	}

	if($Tipo =="TraD" ){ ////Efecución de la función encargada de obtener el horario actualizado para su gestionamiento o selección de horarios de entrega.
		$fac = new Fachada();
		$row = $fac->outHorario();

		echo json_encode($row); //Se retorna la variable haciendo un casteo a Json para facilitar su manipulación en interfaz de usuario/administrador

	}


	if($Hor != ""){  //Efecución de la función encargada de enviar datos pos-modificacion horario
		$fac = new Fachada(); 
		if($fac->modHorario($Hor)){
			return true;
		}
		else{
			return false;
		}
	}

	if($Mer != ""){  //Efecución de la función encargada de enviar datos de la mercancia por parte del administrador
		$fac = new Fachada();
		if($fac->inMercancia($Cedula,$Mer,$Nombres,$Pri)){
			return true;
		}
		else{
			return false;
		}
	}
?>

	



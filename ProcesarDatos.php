<?php
	$Nombres = $_POST['Nom'];
	$Apellidos = $_POST['Ape'];
	$Cedula = $_POST['Ced'];
	$Email = $_POST['Ema'];
	$Telefono = $_POST['Tel'];
	$Contraseña = $_POST['Cont'];

	if(isset($_POST['Nom']) && !empty($_POST['Nom']) &&
		isset($_POST['Ape']) && !empty($_POST['Ape']) &&
		isset($_POST['Ced']) && !empty($_POST['Ced']) &&
		isset($_POST['Ema']) && !empty($_POST['Ema']) &&
		isset($_POST['Tel']) && !empty($_POST['Tel']) &&
		isset($_POST['Cont']) && !empty($_POST['Cont']))
		{
			
			$EnlanceBD = mysql_connect(localhost, root, losimepeenelcadelavi) or die("No se conecta a la base de datos");
			mysql_select_db(isoft, $EnlanceBD) or die("No se puede seleccionar la BD");

			$result = mysql_query("SELECT * from usuarios where Email='" . $Email . "'");
			if($row = mysql_fetch_array($result)){
				if($row['Email'] == $Email) {
					session_start();
					echo("deja la maricada y no copies Email que esa monda ya existe"); //header("Location: contenido.php");
				}else{//Se envian los datos a la base de datos para ser almacenados
					echo "kalacnifok";
					
					exit();
				}
			}else{
				mysql_query("INSERT INTO usuarios VALUES('$Nombres', '$Apellidos', '$Cedula', '$Contraseña', '$Email', '$Telefono','Cliente') ");
				echo "Datos enviados correctamente";
				exit();
			}
			
		}else{
			echo "Error al enviar los datos";
		}

?>


<!--<div id="xx"></div>
		<div id="yy"></div> 
        <script type="text/javascript" src = assets/js/app.js></script>-->
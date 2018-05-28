<?php
 
$Email = $_POST['Ema'];
$Contraseña = $_POST['Cont'];
 
if(empty($Email) || empty($Contraseña)){
echo ("Hablamos1");
exit();
}
 
mysql_connect('localhost','root','losimepeenelcadelavi') or die("Error al conectar " . mysql_error());
mysql_select_db('isoft') or die ("Error al seleccionar la Base de datos: " . mysql_error());
 
$result = mysql_query("SELECT * from usuarios where Email='" . $Email . "'");
 
if($row = mysql_fetch_array($result)){
	if($row['Contraseña'] == $Contraseña) {
		session_start();
		echo "Sugoooi";
	}else{
		echo("Hablamos");  //header("Location: contenido.php");
		exit();
	}
}else{
  // header("Location: contenido.php");
	exit();
}
 
 
?>
<script type="text/javascript" src="pru.php">
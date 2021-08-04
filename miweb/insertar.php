<?php
 
   define('DB_SERVER', '172.18.0.2');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', 'claveroot');
   define('DB_DATABASE', 'Proyecto');
   $conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

	if (!$conn){
		die("No se pudo conectar al servidor con los parámetros especificados.".mysqli_connect_error());
	}
	$emai=$_REQUEST['email'];
	$na=$_REQUEST['ussername'];
	$pass=$_REQUEST['password'];
	$tipo=$_REQUEST['tipo'];

	$sql =  "INSERT INTO Usuarios VALUES ('$emai','$na',md5('$pass'),'$tipo',NULL,'1',NULL,NULL,NULL,NULL,0)";

	if (mysqli_query($conn, $sql)) {

		echo("Se ha agregado un registro a la base de datos.");

	}	else {
		echo("Error:".mysqli_error($conn));
	}
	mysqli_close($conn);
?>

<html>
		<div class="col-md-4">
			<button class="btn btn-success btn-block"  onclick="location.href='index.php'">OK </button> 
			<button class="btn btn-success btn-block"  onclick="location.href='insert.html'">Reintentar </button>
		</div>
	
<html/>	


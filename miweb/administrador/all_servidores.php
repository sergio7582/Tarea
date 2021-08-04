<?php
include('db_esclavo.php');
$response=new stdClass();

//$datos=array();
$datos=[];
$i=0;
$text=$_POST['text'];
$sql="select * from servidores where delete=0 and nombre LIKE '%$text%'";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){
	$obj=new stdClass();
	$obj->nombre=$row['nombre'];
	$obj->marca=$row['marca'];
	$obj->modelo=$row['modelo'];
	$obj->tipod=$row['tipo_dd'];
	$obj->snombre=$row['so_nombre'];
	$datos[$i]=$obj;
	$i++;
}

$response->datos=$datos;

mysqli_close($con);
header('Content-Type: application/json');
echo json_encode($response);
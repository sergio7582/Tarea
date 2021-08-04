<?php

include('db_maestro.php');

date_default_timezone_set("America/Mexico_City");

if (isset($_POST['save_task'])) {
 
  $nombre = $_POST['nombre'];
  $marca = $_POST['marca'];
  $modelo = $_POST['modelo'];
  $capacidad = $_POST['capacidad'];
  $tipodd = $_POST['tipo_dd'];
  $tiposo = $_POST['tipo_so'];
  $version = $_POST['version'];
  $ram = $_POST['ram'];
  $consumo = $_POST['consumo_elec'];
  $mac = $_POST['mac'];
  $ip = $_POST['ip'];


  $query = "INSERT INTO servidores (nombre, marca, modelo, almacenamiento, tipo_dd, so_nombre, version, ram, consumo_electrico, calor, direccion_mac, direccion_ip, created_time, created_by, modified_time, modified_by, deleted) VALUES ('$nombre', '$marca', '$modelo', '$capacidad', '$tipodd', '$tiposo', '$version', '$ram', '$consumo', NULL, '$mac', '$ip', CURRENT_TIMESTAMP, 'admin',NULL,NULL,0)";

  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Se guardo correctamente';
  $_SESSION['message_type'] = 'success';
  header('Location: home-admi.php');

}

?>

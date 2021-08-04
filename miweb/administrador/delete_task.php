<?php

include("db_maestro.php");

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "UPDATE `servidores` SET `deleted` = '1' WHERE `servidores`.`nombre` = '$id'";
  $result = mysqli_query($conn, $query);


  if(!$result) {
    die("Error al borrar.");
  }

  $_SESSION['message'] = 'Se elimino correctamente';
  $_SESSION['message_type'] = 'danger';
  header('Location: buscar.php');
}

?>

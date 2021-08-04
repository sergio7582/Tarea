
<!DOCTYPE html>
<html>
<style type = "text/css">
         body {
            margin: 0;
            padding: 0;
            background: url(img/images.jpg) no-repeat center top;
            background-size: cover;
            font-family: sans-serif;
            height: 100vh;
          }
          .fit-picture {
            width: 250px 
          } 
          .borde-1 {
          border: black 3px solid;
          
          }
         h5{color:white;
          }
          .search-place input{
            padding: 10px;
            font-size: 15px;
            background-color: #fefefe;
            border:1px solid #ccc;
            position: relative; top: 10px;
            width: calc(25% - 50px);
            font-family: 'Sen', sans-serif;
          }
          .search-place input:placeholder{
            color: #ccc;
          }
          .btn-main{
            padding: 10px;
            font-size: 15px;
            background-color: #fefefe;
            border-style: none;
            border:1px solid #ccc;
            cursor: pointer;
          }
          .btn-search{
            position: relative; top: 10px;
            width: 40px;
            color: #333;
          }

      </style>
<head>
  <title>Buscar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

</head>

<body>

  <?php include("includes/header.php"); ?>
  <?php
    $busqueda = strtolower($_REQUEST['busqueda']);
    if(empty($busqueda)){
      
    } 
  ?>

<form  method="get"  >
  <div  align = "right" class="search-place">
    <input type="text" name="busqueda" id="busqueda" placeholder="Buscar" value="<?php echo $busqueda;?>">
    <button class="btn-main btn-search" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>


  </div>
    
  </form>
     
    <table style="width: 90%; background: white; position: relative; top: 20px;" align="center" BGCOLOR="white" class="table table-hover col-md-12" >
        <thead style="background-color: #28a745;">
          <style type = "text/css">
         body {
            margin: 0;
            padding: 0;
            background: url(img/images.jpg) no-repeat center top;
            background-size: cover;
            font-family: sans-serif;
            height: 100vh;
          }
          h5{color:white;
          }
      </style>
      
          <tr>
            <th>Nombre</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Capacidad</th>
            <th style="width:150px;">Tipo de disco duro</th>
            <th style="width:150px;">Sistema Operativo</th>
            <th>Version</th>
            <th>RAM</th>
            <th style="width:150px;">Consumo eléctrico</th>
            <th>MAC</th>
            <th>IP</th>
            <th style="width:150px;">Fecha de creación</th>
            <th style="width:150px;">Editar / eliminar</th>

          </tr>

        </thead>
        <tbody> 


          
          <?php
          include('db_esclavo.php');
          $query = "SELECT * FROM servidores 
                                            where ( nombre LIKE '%$busqueda%' OR
                                                    marca LIKE '%$busqueda%' or
                                                    so_nombre LIKE '%$busqueda%')
                                                    AND deleted=0";
          $result_tasks = mysqli_query($conn2, $query);    

          while($row = mysqli_fetch_array($result_tasks)) { ?>
          
          <tr >

            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['marca']; ?></td>
            <td><?php echo $row['modelo']; ?></td>
            <td><?php echo $row['almacenamiento']; ?></td>
            <td><?php echo $row['tipo_dd']; ?></td>
            <td><?php echo $row['so_nombre']; ?></td>
            <td><?php echo $row['version']; ?></td>
            <td><?php echo $row['ram']; ?></td>
            <td><?php echo $row['consumo_electrico']; ?></td>
            <td><?php echo $row['direccion_mac']; ?></td>
            <td><?php echo $row['direccion_ip']; ?></td>
            <td><?php echo $row['created_time']; ?></td>
          
            <td>
              <a href="editar.php?id=<?php echo $row['nombre']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="delete_task.php?id=<?php echo $row['nombre']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>

          <?php } ?>
        
        </tbody>
      </table>
  

  
</body>
</html>
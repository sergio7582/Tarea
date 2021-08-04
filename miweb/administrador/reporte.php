<?php include("db_esclavo.php"); ?>
<?php include('includes/header.php'); ?>


      
      

<div  align = "center"> 
<table style="background: white; text-align: center; width: 100%; " class="table table-hover col-md-10" BGCOLOR="white" >
        <thead style="background-color: #28a745;">
          <style type ="text/css">
         body {
            margin: 0;
            padding: 0;
            background: url(img/images.jpg) no-repeat center top;
            background-size: cover;
            font-family: sans-serif;
            height: 100vh;
          }

      </style>
      
          <tr >
            <br>
            <th>Nombre</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Capacidad</th>
            <th>Tipo de disco duro</th>
            <th>Sistema Operativo</th>
            <th>Version</th>
            <th>RAM</th>
            <th>Consumo electrico</th>
            <th>MAC</th>
            <th>IP</th>
            <th>Fecha de creacion</th>
            <th>Creado por</th>
            <th>Modificado el </th>
            <th>Modificado por</th>
          </tr>

        </thead>
        <tbody > 


          
          <?php
          $query = "SELECT * FROM servidores";
          $result_tasks = mysqli_query($conn2, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          
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
            <td><?php echo $row['created_by']; ?></td>
            <td><?php echo $row['modified_time']; ?></td>
            <td><?php echo $row['modified_by']; ?></td>
          </tr>

          <?php } ?>
        
        </tbody>
      </table>
    </div>
        <div align = "center">
        <div class="col-md-2">
          <button class="btn btn-success btn-block"  onclick="location.href='home-admi.php'">Regresar</button  /><br>
        </div>
     </div>
  </div>

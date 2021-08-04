<?php include("db_maestro.php"); ?>
<?php include('includes/header.php'); ?>

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


<main  class="container p-4">

  <div class="row">
    <div class="col-md-4">
        <form action="save_task.php" method="POST">
          <div class="form-group">
            <label>Nombre</label>
            <input type="text" name="nombre" class="form-control" placeholder="Nombre del servidor" autofocus>
          </div>
 
          <div class="form-group">
            <label>Marca</label>
            <input type="text" name="marca" class="form-control" placeholder="Marca del servidor" autofocus>
          </div>

          <div class="form-group">
            <label>Modelo</label>
            <input type="text" name="modelo" class="form-control" placeholder="Modelo del servidor" autofocus>
          </div>

          <div class="form-group">
            <label>Almacenamiento</label>
            <input type="text" name="capacidad" class="form-control" placeholder="Capcacidad en GB" autofocus>
          </div>

          <div class="form-group">
            <label>Tipo de DD</label>
            <div class="form-group">
              <select class="form-control" name="tipo_dd">
                    <option selected disabled="">Selecciona una opción</option> 
                    <option value="Mecanico">Mecanico</option> 
                    <option value="Magnetico">Solido</option> 
            </select/><br/><br/>
            </div>
          </div>

           <div style="position: relative; top: -50px;"  class="form-group">
            <label>Tipo de S.O</label>
            <div class="form-group">
              <select class="form-control" name="tipo_so">
                    <option selected disabled="">Selecciona una opción</option> 
                    <option value="Mecanico">Windows</option> 
                    <option value="Magnetico">Linux</option> 
            </select/><br/><br/>
            </div>
          </div>

    </div>
        <div class="col-md-4">
          <div class="form-group">
            <label>Version</label>
                <input type="text" name="version" class="form-control" placeholder="Version de SO" autofocus>
          </div>
          <div class="form-group">
            <label>Ram</label>
            <input type="text" name="ram" class="form-control" placeholder="Capacidad en GB" autofocus>    
          </div>
          <div class="form-group">
            <label >Consumo eléctrico</label>
            <input type="text" name="consumo_elec" class="form-control" placeholder="Consumo eléctrico" autofocus>
          </div>
          <div class="form-group">
            <label> Dirección MAC</label>
            <input type="text" name="mac" class="form-control" placeholder="Dirección MAC" autofocus>
          </div>
          <div class="form-group">
            <label>Dirección ip</label>
            <input type="text" name="ip" class="form-control" placeholder="Dirección ip" autofocus>
          </div>
          <div style="position: relative; top: 29px;" class="form-group">
            <input type="submit" name="save_task" class="btn btn-success btn-block" value="Guardar"></button  /><br> 
            
          </div>
       
     
</main>


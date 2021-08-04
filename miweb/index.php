<?php
   include("config.php");
   session_start();

   $error="";
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      
      $sql = "SELECT * FROM Usuarios WHERE usuario = '$myusername' and pass = md5('$mypassword')";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
      if($count == 1) {
        $rol = $row['tipo'];
        $_SESSION['rol'] = $rol;
        switch ($_SESSION['rol']) {
            case 'administrador':
            
            
            # code...
            header("location: administrador/home.php");
            break;
            case 'consulta':
          
           
            # code...
            # code...
          header("location: consultor/home-con.php");
            break;
          
          default:
            # code...
            break;
        }
    }else {
        echo '<script language="javascript"> alert("Usuario o contraseña incorrecta");</script>';

      }
}
   
?>
<script type="text/javascript">
  function sesion(){
    var form = document.form;
    var user = form.username.value;
    var pass = form.password.value;

   if ((user == "") || (pass == "")) {  //COMPRUEBA CAMPOS VACIOS
    alert("Los campos no pueden quedar vacios");
    return false;
}
}

</script>

<html lang="en">
   
   <head>
    
      <style type="text/css">
        body {
            margin: 0;
            padding: 0;
            background: url(img/images.jpg) no-repeat center top;
            background-size: cover;
            font-family: sans-serif;
            height: 100vh;
            display: flex;
            flex-direction: row;
             flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            /* No Scrollbar */
            overflow: hidden; 
         }

       .form-box {
          width: 300px;
          padding: 40px;
          background: #408dad;
          border:#0c0d0d solid 3px;
          text-align: center;
        }

        .form-title {
          color: #fff;
          text-transform: uppercase;
          font-weight: 500;
        }
        .form-box input[type="text"], .form-box input[type="password"], .form-box button[type="submit"] {
          border: 0;
          background: none;
          display: block;
          margin: 20px auto;
          text-align: center;
          border: 2px solid #000000;
          padding: 14px 10px;
          width: 200px;
          outline: none;
          color: white;
          border-radius: 24px;
          transition: 0.25s;
        }

        .form-box input[type="text"]:focus, .form-box input[type="password"]:focus {
          width: 280px;
          border-color: #ffff2f;
        }

        .form-box button[type="submit"] {
            border: 0;
            background: #5355ed;
            display: block;
            margin: 20px auto;
            text-align: center;
            border: 2px solid #000000;
            padding: 14px 40px;
            outline: none;
            color: white;
            border-radius: 24px;
            transition: 0.25s;
            cursor: pointer;
        }
        .form-box button[type="button"] {
            border: 0;
            background: #5355ed;
            display: block;
            margin: 20px auto;
            text-align: center;
            border: 2px solid #000000;
            padding: 14px 40px;
            outline: none;
            color: white;
            border-radius: 24px;
            transition: 0.25s;
            cursor: pointer;
        }

        .form-box button[type="submit"]:hover {
            background: none;
        }
        .form-box button[type="button"]:hover {
            background: none;
        }
</style>

      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Login</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css"> 

      <!-- FONT AWESOEM -->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   </head>
   
   <body>
      <form name = "form" method = "post" >
        <h1 class="form-title">Inicia sesión</h1>
        <div class="form-group">
          <label>Usuario</label>
          <input type="text" name="username" class="form-control" placeholder="Nombre de usuario" autofocus>
        </div>
        <div class="form-group">
          <label>Contraseña</label>
          <input type="password" name="password" class="form-control" placeholder="Password" autofocus>
        </div>
        <div class="form-group">
          <button class="btn btn-success btn-block" onclick="return sesion();" type = "submit">Entrar</button>
        </div>
        <button class="btn btn-success btn-block" onclick="location.href='insert.html'" type = "button">Registrarse</button>
      </form>

  
   </body>
</html>

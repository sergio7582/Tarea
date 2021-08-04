<?php
	define('DB_SERVER', '172.18.0.5');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', 'claveroot');
   define('DB_DATABASE', 'Proyecto');
   $conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

   if ($inc){
   		$consulta ="SELECT FROM Usuarios";
   		$resultado = mysqli_query($conn,$consulta);
   	if ($resultado) {
		while ($row = $resultado->fetch_array()) {
	    $email = $row['id'];
	    $nombre = $row['email'];
	    ?>
        <div>
        	<h2><?php echo $nombre; ?></h2>
        	<div>
        		<p>
        			<b>ID: </b> <?php $id ?><br>
        		    <b>Nombre: </b> <?php $email ?><br>
        		    
        		</p>
        	</div>
        </div> 
	    <?php
	    }
	}
}

?>
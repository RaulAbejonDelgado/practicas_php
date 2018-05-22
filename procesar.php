<!DOCTYPE html>
<html>
<head>
<?php include "index.php";?>
	<title>procesar php</title>
	<meta charset="utf-8">
</head>
<body>
<h1>Datos recividos</h1>
	
		<?php
			$nombre=$_POST['nombre'];
			$email=$_POST['email'];
			$lenguaje=$_POST['lenguaje'];
			 
		?>
			 	
	<h2>Nombre</h2>
	<p><?php echo "Hola ".$nombre." su direccion de correo es ".$email. " y el lenguaje seleccionado a sido ".$lenguaje ?></p>
	<br>
	<a href="index.php">Volver</a>

</body>
</html>
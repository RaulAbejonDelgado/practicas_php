<!DOCTYPE html>
<html>
<head>
<?php include "index.php"; ?>
	<title>Condicionales IF procesamiento</title>
</head>
<body>

	<?php
			$nombre=$_POST['nombre'];
			$edad=$_POST['edad'];
			
			 
		?>
		<?php
		 if ($edad > 17 ){
		 	echo "Eres mayor de edad";
		 }else{
		 	echo "Usuario no autorizado ";
		 }



		?>
		<br>
		<a href="condicionales_if_form.php">Volver</a>


</body>
</html>
<!DOCTYPE html>
<html>
<head>
<?php
include "index.php";
?>
	<title>Formulario objetos</title>
</head>
<body>

<form method="POST" action="obejto_usuario.php">
		<p>Introduzca su nombre</p>
		<input type="text" name="nombre">
		<p> Introduzca su Clave</p>
		<input type="text" name="clave">
		<br>
		<input type="submit" value="enviar">
		</p>
		<br>
		<a href="index.php">Borrar</a>

		
</form>

</body>
</html>
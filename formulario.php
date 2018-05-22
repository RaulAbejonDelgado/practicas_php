<!DOCTYPE html>
<html>
<head>
<?php include "index.php";?>
	<title>Formulario</title>
</head>
<body>
<form method="POST" action="procesar.php">
		<p>Introduzca su nombre</p>
		<input type="text" name="nombre">
		<p> Introduzca su Email</p>
		<input type="text" name="email">
		<p>Selecione lenguaje de pogramacion<br>
		<select name="lenguaje">
			<option value="php">PHP</option>
			<option value="PYTHON">PYTHON</option>
			<option value="C">C</option>
		</select>
		<input type="submit" value="enviar">
		</p>
		<br>
		<a href="index.php">Borrar</a>

		
</form>
</body>
</html>
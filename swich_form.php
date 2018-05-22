<!DOCTYPE html>
<html>
<head>
<?php include "index.php"; ?>
	<title>swich php formulario</title>
</head>
<body>

	<form method="POST" action="swich_procesador.php">
		<p>Selecione lenguaje de pogramacion<br>
		<select name="lenguaje">
			<option value="php">PHP</option>
			<option value="python">PYTHON</option>
			<option value="c">C</option>
		</select>
		<p>Selecione una accion <br>
		<select name="accion">
			<option value="print">print</option>
			<option value="var">variables</option>
			
		</select>
		<input type="submit" value="Enviar">
	</form>
	<br>
	<a href="index.php">Borrar</a>
	
</body>
</html>
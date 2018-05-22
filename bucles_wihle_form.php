<!DOCTYPE html>
<html>
<head>
<?php include "index.php"; ?>
	<title>Ciclos while formulario</title>
</head>
<body>

	<form method="POST" action="ciclo_while_procesador.php">
		<p>Introduzca el numero de vueltas</p>
		<input type="text" name="vueltas">
		<p> introduzca en cuanto quiere incrementar el ciclo</p>
		<input type="text" name="incremento">
		<p> introduzca el numero de vuelta de comienzo</p>
		<input type="text" name="comienzo">
		<input type="submit" value="enviar">
		</p>
	</form>
	<br>
	<a href="index.php">Borrar</a>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<?php include "index.php"; ?>
	<title>Insertar datos en mysql</title>
</head>
<body>
<form method="POST" action="accion_agregar_datos.php">
		<p>id</p>
		<input type="text" name="id_practica">
		<p>Nombre</p>
		<input type="text" name="name">
		<p> Note</p>
		<input type="text" name="notice">
		<br>
		<input type="submit" value="Agregar nota">
		</p>
	</form>
	<br>
	<a href="index.php">Atras</a>

</body>
</html>
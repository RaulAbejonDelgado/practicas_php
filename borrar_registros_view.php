<!DOCTYPE html>
<html>
<head>
	<?php include "index.php"; ?>
	<title>Lectura de datos en mysql</title>
</head>
<body>
<h1>Registros</h1>
<?php
$conexion = mysqli_connect("localhost","odoo","odoo","practicas_php");
$registros = mysqli_query($conexion,"select * from practica");

while($reg = mysqli_fetch_array($registros)){
	echo "<h2>".$reg['name']."</h2>"."<br>".$reg['notice'];
	echo "<br>";
	echo "<a href=borrar_registros.php?id".$$reg['id']."$ac=1>Borrar</a>";
	echo "<hr>";
	echo "<br>";
}
?>
<br>
	<a href="index.php">Atras</a>

</body>
</html>
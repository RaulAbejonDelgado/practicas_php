<!DOCTYPE html>
<html>
<head>
	<?php include "index.php" ?>
	<title>Accion agregar datos</title>
</head>
<body>
<?php
$id_practica = $_POST['id_practica'];
$name = $_POST['name'];
$notice = $_POST['notice'];
$conexion = mysqli_connect("localhost","odoo","odoo","practicas_php");
mysqli_query($conexion,"INSERT INTO practica values('$id_practica','$name','$notice')");
echo "Nota guardada";

?>
<br>
<a href="sql1.php">Ver notas</a>
<br>
<a href="index.php">Volver</a>

</body>
</html>
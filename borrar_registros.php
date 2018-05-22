<!DOCTYPE html>
<html>
<head>
	<?php include "index.php" ?>
	<title>Accion Eliminar Actualizar</title>
</head>
<body>
<?php
$ac=$_GET['ac'];
$id_practica = $_POST['id_practica'];
$name = $_POST['name'];
$notice = $_POST['notice'];
$conexion = mysqli_connect("localhost","odoo","odoo","practicas_php");
switch (ac) {
	case 'value':
		# code...
		break;
	
	default:
		# code...
		break;
}
mysqli_query($conexion,"INSERT INTO practica values('$id_practica','$name','$notice')");
echo "Nota guardada";

?>
<br>
<a href="sql1.php">Ver notas</a>
<br>
<a href="index.php">Volver</a>

</body>
</html>
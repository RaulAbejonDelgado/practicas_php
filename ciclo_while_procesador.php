<!DOCTYPE html>
<html>
<head>
	<?php include "index.php"; ?>
	<title>procesador ciclo while</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
				$vueltas=$_POST['vueltas'];
				$incremento=$_POST['incremento'];
				$comienzo=$_POST['comienzo'];
	?>
	<?php
		while ($comienzo <= $vueltas){
		echo "El contador de la vuelta esta en ".$comienzo." en este ciclo while con un incremento de".$incremento." por vuelta <br>";
		$comienzo = $comienzo + $incremento;
		}
		


	?>
	<a href="bucles_wihle_form.php">Volver</a>
</body>
</html>
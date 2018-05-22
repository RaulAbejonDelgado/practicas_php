<!DOCTYPE html>
<html>
<head>
<?php include "index.php"; ?>
	<title>procesador ciclo for</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
				$vueltas=$_POST['vueltas'];
				$incremento=$_POST['incremento'];
				$comienzo=$_POST['comienzo'];
	?>
	<?php
		for ($i=$comienzo; $i <= $vueltas; $i=$i + $incremento ){
			
			echo "La vuelta ha comenzado en ".$comienzo." estamos en la vuelta nº ".$i." con un incremento de".$incremento." por vuelta <br>";
		}


	?>
	<a href="bucles_for_form.php">Volver</a>
</body>
</html>
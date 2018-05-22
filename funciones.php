<!DOCTYPE html>
<html>
<head>
<?php include "index.php"; ?>
	<title>Funciones php</title>
</head>
<body>
<?php 
	function HolaMundo(){
		return "Hola desde una funcion";
		//echo "hola jodido mundo";
	}
	function HolaMundoProcedure(){
		
		echo "hola desde un procedimiento";
	}
	echo HolaMundo();
	echo "<br>";
	HolaMundoProcedure();

?>
<br>
<a href="index.php">Borrar</a>

</body>
</html>
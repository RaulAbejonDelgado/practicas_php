<!DOCTYPE html>
<html>
<head>
<?php
include "index.php";
?>
	<title>Concatenacion de strings</title>
	<meta charset="utf-8">
</head>
<body>
<h1>Variables tipo string</h1>
<?php
	$nombre="Drohne";
	$edad=34;
	echo "Hola ".$nombre." que tal se siente a los ".$edad." años de edad ? <br>";
	echo $nombre." esta compuesto por ".strlen($nombre)." letras";

?>
<br>
<a href="index.php">Borrar</a>

</body>
</html>
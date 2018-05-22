<!DOCTYPE html>
<html>
<head>
	<?php include "index.php"; ?>
	<title>procesador swich</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
				$lenguaje=$_POST['lenguaje'];
				$accion=$_POST['accion'];
				
	?>
	<?php
		
		switch ($lenguaje){
			case 'python':
					switch($accion){
						case 'print':
							echo "En python la salida de informacion a traves de pantalla se realiza a traves de la siguiente sintaxis : <br>";
							echo "print variable";
							break 2;
						case 'var':
							echo "En python las variables se declaran a traves de la siguiente sintaxis : <br>";
							echo "NombreVariable= 5";
							break 2;
					}
				break;
			case 'php':
					switch($accion){
						case 'print':
							echo "En php la salida de informacion a traves de pantalla se realiza a traves de la siguiente sintaxis : <br>";
							echo 'echo $variable';
							break 2;
						case 'var':
							echo "En php las variables se declaran a traves de la siguiente sintaxis : <br>";
							echo '$NombreVariable= 5';
							break 2;
					}
				break;
			case 'c':
					switch($accion){
						case 'print':
							echo "En C la salida de informacion a traves de pantalla se realiza a traves de la siguiente sintaxis : <br>";
							echo 'printf (variable)';
							break 2;
						case 'var':
							echo "En c las variables se declaran a traves de la siguiente sintaxis : <br>";
							echo 'int NombreVariable= 5';
							break 2;
					}
				break;

		}

	?>
	<br>
	<a href="swich_form.php">Volver</a>
</body>
</html>
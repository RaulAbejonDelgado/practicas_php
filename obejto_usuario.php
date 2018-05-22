
<html>
<head>
<?php include "index.php"; ?>
	<title>Obejto usuario</title>
	<meta charset="utf-8">
</head>
<body>
<h1>1º-Objetos recividos desde objeto_form </h1>
<h2>2º-Tratados mediante la clase_usuario</h2>
<h3>3º-En obejto_usuario</h3>
<?php
$nombre=$_POST['nombre'];
$clave=$_POST['clave'];
?>
<?php


require "clase_usuario.php";

$test = new Usuario();
$test->setNombre($nombre);
$test->setClave($clave);

echo $test->getNombre($nombre);
print "<br>";
echo $test->getClave($clave);

//$value = $getValue->bindTo(new A, 'A'); 
//print($value());
?>
<br>
<a href="index.php">Borrar</a>

</body>
</html>
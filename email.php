<!DOCTYPE html>
<html>
<head>
<?php include "index.php"; ?>
	<title>Funcion Email php</title>
</head>
<body>
<form method="POST" action="enviar.php">
	<p>Nombre:</p>
	<input type="text" name="name">
	<p>Email</p>
	<input type="text" name="email">
	<p>Text:</p>
	<textarea name="msg"></textarea>
	<br>
	<input type="submit" value="send">
</form>
<a href="index.php">Borrar</a>

</body>
</html>
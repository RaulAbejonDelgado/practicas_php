<?php
include "index.php";
$name=$_POST['name'];
$email=$_POST['email'];
$msg=$_POST['msg'];
$mensaje="Has recivido un email de ".$nombre." con direccion de correo : ".$email." <br>"-$msg;
mail("drohne@gmail.com", "Mensaje desde introducion a php", $mensaje);
echo "done";


?>
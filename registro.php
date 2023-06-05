<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registro</title>
</head>

<body>

<?php
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$mail = $_POST['mail'];
	$usuario = $_POST['usuario'];
	$clave = md5($_POST['clave']);



	include("conexion.php");


	$consulta = mysqli_query($conexion, "INSERT INTO usuarios (usuario, clave, nombre, apellido, mail) VALUES('$usuario','$clave','$nombre', '$apellido', '$mail')");


	header("Location:form_login.php");

?>	
    

</body>
</html>
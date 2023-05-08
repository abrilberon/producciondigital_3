<!DOCTYPE html>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Enviar</title>
</head>

<body>
<?php

//se arma el array POST
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$localidad=$_POST['localidad'];
$comentario=$_POST["comentario"];

$destino="mail@mail.com";
$asunto="Contacto desde el sitio";
$mensaje="Nombre: ".$nombre." Email: ".$email." Localidad: ".$localidad." Mensaje: ".$comentario;

$header="From: ".$nombre."<".$email.">";

/*
$enviado = mail($destino,$asunto,$mensaje,$header);
*/

/*
if($enviado == true){
	echo "Su correo ha sido enviado.";
}else{
	echo "Hubo un error en el envio del mail.";
}
*/

include ("conexion.php");


// $consulta=mysqli_query($conexion, "INSERT INTO contactos VALUES ('','$nombre','$email','$localidad','$comentario')");

$consulta = mysqli_query($conexion, "INSERT INTO contactos (nombre,email,localidad,comentario)VALUES ( '$nombre','$email','$localidad','$comentario')") or die(mysqli_error($conexion));

header("Location:enviado.html")

?>
</body>
</html>
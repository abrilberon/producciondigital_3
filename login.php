<?php session_start();?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login de Usuarios</title>
</head>

<body>

<?php
$usuario=$_POST['usuario'];
$clave=md5($_POST['clave']);

include("conexion.php");

$consulta=mysqli_query($conexion, "SELECT nombre, apellido, mail FROM usuarios WHERE usuario='$usuario' AND clave='$clave'");

$resultado=mysqli_num_rows($consulta);

if($resultado!=0){
	$respuesta=mysqli_fetch_assoc($consulta);
	
	$_SESSION['nombre']=$respuesta['nombre'];
	$_SESSION['apellido']=$respuesta['apellido'];
		
		
		echo "<a href='panel.php'>Panel</a>";	

}else{
	echo "No es un usuario registrado";
	include ("form_registro.php");
}




header("Location:panel.php");



?>

</body>
</html>
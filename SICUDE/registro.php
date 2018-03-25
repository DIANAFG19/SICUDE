<?php
$nombre=$_POST['nombre'];
$appaterno=$_POST['appaterno'];
$apmaterno=$_POST['apmaterno'];
$direccion=$_POST['direccion'];
$usuario=$_POST['usuario'];
$pass=$_POST['psw'];
$rpass=$_POST['rpsw'];

if($pass==$rpass){
	$matricula=$_POST['matricula'];
	$pass=$_POST['pswd'];
	$db_host="198.91.81.6";
	$db_nombre="sicudex1_sistema";
	$db_usuario="sicudex1_diana";
	$db_pass="123456";
	$conexion=mysqli_connect($db_host,$db_usuario,$db_pass,$db_nombre);
	if(mysqli_connect_errno($db_nombre)){
		echo mysqli_error($conexion);
	}
	else{
		echo "DATOS REGISTRADOS";
		$registrar="INSERT INTO persona VALUES('','$nombre','$appaterno','$apmaterno','$direccion','$usuario','$pass')";
		mysqli_query($conexion,$registrar);
		include("acceso.php");
	}
	mysqli_close($conexion);
}
else{
	echo "Las contraseñas no coinciden, intentelo de nuevo";
	include("registro.php");
}
?>
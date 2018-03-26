<?php
$matricula=$_POST['matricula'];
$nombre=$_POST['nombre'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$pass=$_POST['pswd'];
$rpass=$_POST['pswdc'];

if($pass==$rpass){
	$db_host="198.91.81.6";
	$db_nombre="sicudex1_sistema";
	$db_usuario="sicudex1_diana";
	$db_pass="123456";
	$conexion=mysqli_connect($db_host,$db_usuario,$db_pass,$db_nombre);
	if(mysqli_connect_errno($db_nombre)){
		echo mysqli_error($conexion);
	}
	else{
		echo 'USTED HA SIDO REGISTRADO CORRECTAMENTE';
		$registrar="INSERT INTO usuario VALUES('$matricula','$nombre','$telefono','$correo','$pass')";
		mysqli_query($conexion,$registrar);
		include("index.html");
	}
	mysqli_close($conexion);
}
else{
	echo "Las contraseñas no coinciden, inténtelo de nuevo.";
	include("registro.html");
}

?>
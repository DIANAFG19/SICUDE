<?php
/*
Editado 26/03/18 Luis Ivan Herrera Equihua
	Código alternativo para registro (inconcluso)

*/

$matricula=$_POST['matricula'];
//$no_cuenta=$_POST['no_cuenta'];
$nombre=$_POST['nombre'];
$telefono=$_POST['telefono'];

$correo=$_POST['correo'];
$pass=$_POST['pswd'];
$rpass=$_POST['pswdc'];
/*
$a_paterno=$_POST['a_paterno'];
$a_materno=$_POST['a_materno'];
$telefono_casa=$_POST['telefono_casa'];
$telefono_cel=$_POST['telefono_cel'];
$fecha_nacimiento=$_POST['fecha_nacimiento'];
*/


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
		//$passHash = password_hash($pass, PASSWORD_BCRYPT);
		$registrar="INSERT INTO usuario VALUES('$matricula','$nombre','$telefono','$correo','$pass')";

		//$registrar="INSERT INTO alumno VALUES('$matricula','$nombre','a_paterno','a_materno','$telefono','$correo','$pass')";

		mysqli_query($conexion,$registrar);
		echo 'USTED HA SIDO REGISTRADO CORRECTAMENTE';
		include("index.html");
	}
	mysqli_close($conexion);
}
else{
	echo "Las contraseñas no coinciden, inténtelo de nuevo.";
	include("registro.html");
}

?>
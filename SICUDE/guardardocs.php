<?php


	$db_host="198.91.81.6";
	$db_nombre="sicudex1_sistema";
	$db_alumno="sicudex1_diana";
	$db_pass="123456";
	$conexion=mysqli_connect($db_host,$db_alumno,$db_pass,$db_nombre);
	if(mysqli_connect_errno($db_nombre)){
		echo mysqli_error($conexion);
		
	}else{

$uploadedfileload="true";
$tipo_archivo=$_POST['tipo'];
$uploadedfile_size=$_FILES['uploadedfile'][size];
echo $nombre;
$file_name=$_FILES[uploadedfile][name];

$file_name=$_POST[no_cuenta] . $_POST[tipo];

$taget_path="/home/sicudex1/public_html/uploads/$file_name";
if($uploadedfileload=="true"){

	if(move_uploaded_file ($_FILES[uploadedfile][tmp_name], $taget_path)){

		echo " Ha sido subido satisfactoriamente";
		echo "<img height=300 src='/home/sicudex1/public_html/uploads/$file_name' >";
		//echo "<img src='/home/sicudex1/public_html/uploads/$file_name' >";
		$registrar="insert into docs(nombre,no_cuenta,Imagen)values('$_POST[tipo]','$_POST[no_cuenta]','$file_name')";
		mysqli_query($conexion,$registrar);
		
		include("muestraarchivo.php");
		

	//header("location:../"); 
	}else{
	echo "Error al subir el archivo";
	
}


	}else{echo $msg;}
	
	}
	




mysqli_close($conexion);	
?>
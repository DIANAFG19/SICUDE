<?php
//Referencia: https://norfipc.com/inf/como-subir-fotos-imagenes-servidor-web.php -->
$uploadedfileload="true";
$uploadedfile_size=$_FILES['uploadedfile'][size];
echo $_FILES[uploadedfile][name];
/*if ($_FILES[uploadedfile][size]>200000)
	{$msg=$msg."El archivo es mayor que 200KB, debes reduzcirlo antes de subirlo<BR>";
	$uploadedfileload="false";}*/

/*if (!($_FILES[uploadedfile][type] =="image/pjpeg" OR $_FILES[uploadedfile][type] =="image/gif"))
	{$msg=$msg." Tu archivo tiene que ser JPG o GIF. Otros archivos no son permitidos<BR>";
	$uploadedfileload="false";}*/

$file_name=$_FILES[uploadedfile][name];
$taget_path="/home/sicudex1/public_html/uploads/$file_name";
if($uploadedfileload=="true"){

	if(move_uploaded_file ($_FILES[uploadedfile][tmp_name], $taget_path)){
		echo " Ha sido subido satisfactoriamente";
		echo "<img src='/home/sicudex1/public_html/uploads/$file_name' >";
	}else{echo "Error al subir el archivo";}

	}else{echo $msg;}
	

?>

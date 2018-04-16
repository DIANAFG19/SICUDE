<?php

$no_cuenta=$_POST['no_cuenta'];
$pass=$_POST['pswd'];
$db_host="198.91.81.6";
$db_nombre="sicudex1_sistema";
$db_alumno="sicudex1_diana";
$db_pass="123456";
$conexion=mysqli_connect($db_host,$db_alumno,$db_pass,$db_nombre);
if(mysqli_connect_errno($db_nombre)){
  echo mysqli_error($conexion);
}
else{
  $consulta="SELECT no_cuenta FROM alumno WHERE no_cuenta LIKE '$no_cuenta' AND password LIKE '$pass'" ;
  $resultado=mysqli_num_rows(mysqli_query($conexion,$consulta));
  if($resultado==1){
    /* Empezamos la sesión */
    session_start();
 
    /* Creamos la sesión */
    $_SESSION['username'] = $_POST['no_cuenta'];
    include("sesion.html");
    header("Location: marcos2.html");
  }
  else{

    /* Si no hay una sesión creada, redireccionar al index. */
        header('Location: index.html');
  }
}
?>
<?php
/*
Editado 26/03/18 Luis Ivan Herrera Equihua
    código alternativo de $consulta

Editado 29/03/18 Luis Ivan Herrera Equihua
    código alternativo de $consulta
*/


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
  //$passHash = password_hash($pass, PASSWORD_BCRYPT);
  //$passVerifica = password_verify($pass, $passHash);

  $consulta="SELECT no_cuenta FROM alumno WHERE no_cuenta LIKE '$no_cuenta' AND password LIKE '$pass'" ;

  
  //$consulta="SELECT no_cuenta FROM alumno WHERE no_cuenta LIKE '$no_cuenta' AND password LIKE '$pass'" ;

  $resultado=mysqli_num_rows(mysqli_query($conexion,$consulta));

  if($resultado==1){
    //include("principal.html");
    session_start();
    $_SESSION['Autenticado'] == "SI";
    header("Location: principal.html");
  }
  else{
    header("Location: login.php?errorusuario=si");
  }
}
mysqli_close($conexion);
?>
<?php
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
  //$passHash = password_hash($pass, PASSWORD_BCRYPT);
  //$passVerifica = password_verify($pass, $passHash);
  $consulta="SELECT matricula FROM usuario WHERE matricula LIKE '$matricula' AND password LIKE '$pass'" ;
  $resultado=mysqli_num_rows(mysqli_query($conexion,$consulta));
  if($resultado==0){
    echo "No existe el usuario o no coincide con la contraseña ingresada";
  }
  else{
    echo "Bienvenido Cliente";
    /*$respuesta=mysqli_query($conexion,$consulta);
    while($rows=mysqli_fetch_array($respuesta)){
    echo "<br>ID PERSONA: ".$rows[0]."<br>";
    include("compras.html");*/
  }
}
mysqli_close($conexion);
?>
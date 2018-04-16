
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <link rel="stylesheet" href="estilos/Estilos.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- 29/03/18 LIHE edición de formulario de registro para homologar según la BD implementada -->
  <!-- PAGE settings -->
  <link rel="icon" href="Imagenes/icono.ico">
  <title>SICUDE</title>
  <!-- CSS dependencies -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="estilos/theme.css" type="text/css">
  <!-- Script: Make my navbar transparent when the document is scrolled to top -->
  <script src="https://d33wubrfki0l68.cloudfront.net/js/12e3ca424c3c55e3d306e6423ed9e81f260dd657/aquamarine/js/navbar-ontop.js"></script>
  <!-- Script: Animated entrance -->
  <script src="https://d33wubrfki0l68.cloudfront.net/js/fe6311b3c294cba469a3939f21603640522c41e5/aquamarine/js/animate-in.js"></script>
</script> 
</head><body>
  <!-- Navbar -->
  <nav class="navbar-expand-md navbar-primary navbar fixed-top bg-pr">
    <div class="container">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar3SupportedContent" aria-controls="navbar3SupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse text-center justify-content-center" id="navbar3SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item mx-3">
            <a class="nav-link text-light"><b class="text-light text-center w-1000"><b class="border-light"><h1><b>UNITEC</b></h1>
            </b>
          </b>
        </a>
      </li>
    </ul>
  </div>
</div>
</nav>
<!-- Cover -->
<div class="align-items-center d-flex photo-overlay py-5 cover" style="background-image: url(&quot;Imagenes/Fondo.jpg&quot;);">
  <div class="container">
    <div class="col-lg-6 p-3 mx-auto">


      <div class="table-responsive">
        <table class="table table-sm table-light">
           <caption>Datos del alumno</caption>
          <thead class="thead-light">
            <tr class="table-light">
              <th scope="col">#</th>
              <th scope="col">No. de cuenta</th>
              <th scope="col">Nombre</th>
              <th scope="col">Apellido paterno</th>
              <th scope="col">Apellido materno</th>
              <th scope="col">Correo</th>
              <th scope="col">Tel. Casa</th>
              <th scope="col">Tel. celular</th>
              <th scope="col">Password</th>
            </tr>
          </thead>
          <?php
          $no_cuenta=$_POST['no_cuenta'];
          $pass=$_POST['pswd'];
          $db_host="198.91.81.6";
          $db_nombre="sicudex1_sistema";
          $db_alumno="sicudex1_diana";
          $db_pass="123456";
          $conexion=mysqli_connect($db_host,$db_alumno,$db_pass,$db_nombre);
          $id="15333468";
          $consulta="select * from alumno where no_cuenta = $id";
          $resultado=mysqli_query($conexion,$consulta);
          if (!$rec) {
            echo("Error: %s\n" . mysqli_error($conexion));
          }


  //necesaria la extracción del usuario

          while ($f=mysqli_fetch_array($resultado)) {
            ?>

            <tbody>
              <tr>
                <th scope="row">1</th>
                <td><?php echo $f['no_cuenta'];?></td>
                <td><?php echo $f['nombre'];?></td>
                <td><?php echo $f['a_paterno'];?></td>
                <td><?php echo $f['a_materno'];?></td>
                <td><?php echo $f['correo'];?></td>
                <td><?php echo $f['telefono_casa'];?></td>
                <td><?php echo $f['telefono_cel'];?></td>
                <td><?php echo $f['password'];?></td>
              </tr>
              <?php

            }
            mysqli_close($conexion);
            ?>
          </tbody>

        </table>  
      </div>



    </div>
  </div>
</div>
</div>
<div class="text-rigth bg-primary">
  <div class="container">
    <div class="row">
      <div class="col-md-12 p-4 bg-primary text-primary">
        <p>
          <h4>
            <a href="http://www.unitec.mx/terminos-y-condiciones">Consulta los términos y condiciones</a> |
            <a href="http://www.unitec.mx/politicas-de-privacidad">Políticas de privacidad </a> |
            <a href="https://comunidad.unitec.mx/unitec">Comunidad UNITEC </a> |
            <a href="https://my.laureate.net/pages/fbalogin.aspx?ReturnUrl=%2fstaff%2fPages%2fhome.aspx">Portal Administrativo </a>
          </h4>
        </p>
        <h5> Contamos con el Acuerdo Secretarial 142 de la SEP de fecha 24 de octubre de 1988&nbsp;
          <br>Universidad Tecnológica de México. Derechos Reservados 2016 UNITEC. Dirección: Av. Parque Chapultepec No. 56, Piso 1, Col. El Parque. Mun. Naucalpan de Juarez, EdoMéx., 53398. Laureate Education Inc. 
        </h5>
      </div>
    </div>
  </div>
</div>
<!-- JavaScript dependencies -->
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>

</body></html>

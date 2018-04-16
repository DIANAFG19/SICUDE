<?php 
include "datos/conexion.php";
?>
<html><head>
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
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://d33wubrfki0l68.cloudfront.net/js/fe6311b3c294cba469a3939f21603640522c41e5/aquamarine/js/animate-in.js"></script>
</script> 
</head><body>
  <!-- Navbar -->
  
<!-- Cover -->
<div class="align-items-center d-flex photo-overlay py-5 cover" style="background-image: url(&quot;Imagenes/Fondo.jpg&quot;);">
  <div class="container">
    <div class="col-lg-6 p-3 mx-auto">
      <form class="p-5 bg-dark-opaque" method="post" action="actualizardatos.php">
        <h4 class="mb-4 text-center">Actualiza tus datos</h4>

        <div class="form-group"> <label>Nombre</label>
          <input class="form-control" name="nombre" type="text"  minlength="3" maxlength="30"> </div>
          <div class="form-group"> <label>Apellido Paterno</label>
            <input class="form-control" name="a_paterno" type="text"  minlength="3" maxlength="30"> </div>
            <div class="form-group"> <label>Apellido materno</label>
              <input class="form-control" name="a_materno" type="text"  minlength="3" maxlength="30"> </div>
              <div class="form-group"> <label>Fecha de nacimiento</label></div>
              <div>

                <input type="number" name="dia" min="1" max="31" placeholder="Día" >
                <input type="number" name="mes" min="1" max="12" placeholder="Mes" >
                <input type="number" name="anio"  min="1980" max="2018" placeholder="Año" >
              </div>
              <div class="form-group"> <label>Teléfono de casa</label>
                <input class="form-control" name="telefono_casa" type="text"  pattern="[0-9]+" minlength="8" maxlength="10"> </div>
                <div class="form-group"> <label>Teléfono celular</label>
                  <input class="form-control" name="telefono_cel" type="text"  pattern="[0-9]+" minlength="8" maxlength="10"> </div>
                  <div class="form-group"> <label>Correo</label>
                    <input class="form-control" name="correo" type="email" > </div>
                    <div class="form-group"> <label>Contraseña</label>
                      <input class="form-control" name="pswd" type="password" minlength="6" maxlength="12" > </div>
                        <input type="checkbox" name="terminos" required="required">Acepto Términos y Condiciones.
                        <button type="submit" class="btn mt-4 btn-block btn-warning p-2" class="text-dark" name="registro">Registrar</b></button>

                      </form>
                      <div class="col-lg-6 p-3 mx-auto">
                        <form class="p-5 bg-dark-opaque" method="post" action="guardardocs.php">
                         <h4 class="mb-4 text-center">En caso de que requieras cambiar tus documentos</h4>
                         <button type="submit" class="btn mt-4 btn-block btn-warning p-2" class="text-dark" name="registro">Resubir documentos</b></button>
                       </form>

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
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script type="text/javascript">




  $(document).ready(function(){
  //inicial

   //manejar clicks en el menú
  $('ul#nav li a').click(function(){
    var page = $(this).attr('href');
    $('#content').load('/home/sicudex1/public_html/' + page + '.php');

    return false;
  });
});


</script>
              <script src="https://code.jquery.com/jquery-3.2.1.js"></script>

            </body></html>

<?php
//Metodos para crear la sesion y actuar en consecuencia a ello
session_start();
$botonSession = "";
$botonPerfil = "";
$error = "";
if(isset($_SESSION["id"])){
  $botonSession = "<a class=\"nav-link\" href=\"index.php?cerrarSesion\">Cerrar Sesión</a>";
  
  $botonPerfil = "<li class=\"nav-item\">
  <a class=\"nav-link active\" href=\"perfil.php\">Perfil</a>
  </li>";
}else{
  $botonSession = "<a class=\"nav-link\" href=\"login.php\">Iniciar Sesión</a>";
}

if (isset($_GET["cerrarSesion"])) {
  $_SESSION[] = array() ;
  session_destroy() ;
  header("location:login.php") ;
}
if (isset($_GET["iniciaSesion"])) {
  $error = "<div style=\"position:relative; margin-top:75px; margin-bottom:-75px; \"  class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\"<b>No has iniciado sesión.</b><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button></div>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Índice</title>
  <link rel="icon" href="images/favicon.jpg">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"> 
  <link rel="stylesheet" href="style/index.css">
  <link rel="stylesheet" href="style/container.css">
</head>
<?php include "cabecera.php"?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
<script src="js/index.js"></script>

<?=$error?>

<div class="container">

  <div class="row">
      
    <div id="tablaArticulos" class="col-7">
      <?php require("tablaIndex.php");?>
    </div>

    <div class="col-3 offset-1">
      <?php require("mejores.php");?>
    </div>

  </div>

</div>


</body>
</html>



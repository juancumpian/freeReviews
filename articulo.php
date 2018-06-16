<?php include "model/conexion.php";

session_start();
$botonSession = "";
$botonPerfil = "";
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

include("model/operacionesArticulo.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Artículo</title>
  <link rel="icon" href="images/favicon.jpg">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">  
  <link rel="stylesheet" href="style/articulo.css">
  <link rel="stylesheet" href="style/container.css">
  <script type="text/javascript" data-cfasync="false" src="//apps.shareaholic.com/assets/pub/shareaholic.js" data-shr-siteid="f064be3f33b057b044a3bffa1d979d4f" async="async"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  <script src="js/scriptMegusta.js"></script>
</head>
<?php include "cabecera.php"?>

<div class="container"> 
  <div id="contenido">
    <h2 class="titulo"><?= $titulo?></h2>
    <?= $contenido?>
    <?php include "botonMeGusta.php"?><span id="spanPuntuacion"><?= $puntuacion?></span>
    <blockquote class="blockquote text-right">
      <footer class="blockquote-footer referencia">
        <b>Autor: </b><?= $alias?><img class="img-fluid image" id="imagenPerfil" src="<?=$imagen?>"/>
      </footer>
    </blockquote>
  </div>
  <div class="shareaholic-canvas" data-app="share_buttons" data-app-id="28147212" />
  </div>
</div>



</body>
</html>
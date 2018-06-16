<?php 
//Metodos para crear la sesion y actuar en consecuencia a ello

include "model/conexion.php";

session_start();
$botonSession = "";
$cambio="";
$botonPerfil = "";
if(isset($_SESSION["id"])){
  $botonSession = "<a class=\"nav-link\" href=\"index.php?cerrarSesion\">Cerrar Sesión</a>";
  
  $botonPerfil = "<li class=\"nav-item\">
    <a class=\"nav-link active\" href=\"perfil.php\">Perfil</a>
    </li>  ";
    
  $email = $_SESSION["email"];
  
  $lnk = conectar();
  
  $query = $lnk->query("SELECT * FROM usuarios WHERE email = '$email';");
  
  $fila = $query->fetch_object();
  
  $alias = $fila->alias;
  
  $foto = $fila->imagen_perfil;
}else{
    header("location:index.php?iniciaSesion");
}

if(isset($_GET["contrasennaCambiada"])){
  $cambio = "<div class='success alert-warning alert-dismissible fade show' role='alert'>
              <b>Contraseña cambiada.</b>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
                </button>
             </div>";
}
if(isset($_GET["aliasCambiada"])){
  $cambio = "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
              <b>Alias Cambiado.</b>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
                </button>
              </div>";
}
if(isset($_GET["fotoSubida"])){
  $cambio = "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
              <b>Foto de perfil cambiado.</b>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
                </button>
             </div>";
}
if (isset($_GET["cerrarSesion"])) {
  $_SESSION[] = array();
  session_destroy();
  header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Perfil</title>
  <link rel="icon" href="images/favicon.jpg">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"> 
  
  <script src="http://code.jquery.com/jquery-3.3.1.min.js"integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style/container.css">
  <link rel="stylesheet" href="style/perfil.css">
</head>
<?php include "cabecera.php"?>

<script src="js/funcionesPerfil.js"></script>
<div class="container">
<?=$cambio?>
  <div class="contenedor">
      <div class="row my-5">
        <div class="col-4" id="cambiarFoto"><img class="img-responsive" src=<?=$foto ?> alt="Chania"/>
          <a class="btn btn-danger boton-articulo-perfil card-footer bg-danger w-75" href="cambiarFoto.php">Cambiar</a>
        </div>

        <div class="row">
        <div class="col-12 offset-1">
        <p>
          <h3 id="alias">Alias: <?=$alias ?></h3>
          <a class="btn btn-danger boton-articulo-perfil card-footer bg-danger w-75" href="cambiarAlias.php">Cambiar</a>
        </p>
          <h4>Cambiar contraseña:</h4>
          <a class="btn btn-danger boton-articulo-perfil card-footer bg-danger w-75" href="cambiarContrasena.php">Cambiar</a>
        </div>
        </div>
    </div>
  </div>

  <?php require("tablaMisArticulos.php") ?>

  <?php require("tablaFavoritosPerfil.php") ?>

  <?php require("tablaUsuarios.php") ?>
</div>
</body>
</html>
<?php 
//Metodos para crear la sesion y actuar en consecuencia a ello
include "model/conexion.php";

session_start();
$botonSession = "";
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
if (isset($_GET["cerrarSesion"])) {
    $_SESSION[] = array();
    session_destroy();
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Foto</title>
  <link rel="icon" href="images/favicon.jpg">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"> 
  <link rel="stylesheet" href="style/cambiarFoto.css">
  <script src="http://code.jquery.com/jquery-3.3.1.min.js"integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style/container.css">
</head>
<body>
<?php include "cabecera.php"?>
<script src="js/cambiarFoto.js"></script>
<div class="container">

<fieldset class="form-control">
  <legend class="w-25">Suba su foto aqui</legend>
  <div id="contenedor">
  <form id="imgur" class="mb-5">
    <input type="file" class="imgur" accept="image/*" data-max-size="5000"/>
  </form>
  </div>
</fieldset>
</div>
</body>
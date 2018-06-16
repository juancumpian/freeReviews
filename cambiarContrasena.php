<?php include "model/conexion.php";
//Metodos para crear la sesion y actuar en consecuencia a ello
session_start();
$botonSession = "";
$botonPerfil = "";
$error = "";
$lnk = conectar();
if(isset($_SESSION["id"])){
  $botonSession = "<a class=\"nav-link\" href=\"index.php?cerrarSesion\">Cerrar Sesión</a>";
  
  $botonPerfil = "<li class=\"nav-item\">
  <a class=\"nav-link active\" href=\"perfil.php\">Perfil</a>
  </li>  ";
}else{
    header("location:index.php");
}

if (isset($_GET["cerrarSesion"])) {
  $_SESSION[] = array();
  session_destroy();
  header("location:login.php");
}
$email = $_SESSION["email"];

if(isset($_POST["contrasena"])){
 $contrasena = $lnk->real_escape_string(md5($_POST["contrasena"]));
 $contrasenaC = $lnk->real_escape_string(md5($_POST["contrasenaC"]));

  if($contrasena == $contrasenaC){ 
   $lnk = conectar();
   
   $query = $lnk->query("UPDATE usuarios SET contrasena = '$contrasena' WHERE email = '$email';");
   header("location:perfil.php?contrasennaCambiada");
  }else{
     $error = "<div  class=\"alert alert-danger\">
     <strong>Error</strong> Las contraseñas no coinciden</div>";
  }
}
?>      
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contraseña</title>
  <link rel="icon" href="images/favicon.jpg">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style/container.css">
  <link rel="stylesheet" href="style/cambiarAlias.css">
</head>
<?php include "cabecera.php"?>

<div class="container">
  <fieldset class="form-control">
  <legend class="w-50">Cambie su contraseña aquí</legend>
    <form class="form-inline" method="POST">
      <div class="form-group">
        <label  for="contrasena">Contraseña</label>
        <input placeholder="Contraseña" class="form-control" pattern="(.){4,23}" type="password" name="contrasena" id="contrasena" required/>
      </div>
      <div class="form-group">
        <label  for="Ccontrasena">Confirmar Contraseña</label>
        <input placeholder="Confirmar Contraseña" class="form-control" pattern="(.){4,23}" type="password" name="contrasenaC" id="usuario" required/>
      </div>
      <button class="btn btn-lg btn-danger boton-cambio" type="submit">Enviar</button>
    </form>
    <a id="volver" class=" btn btn-lg btn-danger" href="perfil.php">Volver</a>
  </fieldset>

</div>
<?=$error ?>

</body>
</html>
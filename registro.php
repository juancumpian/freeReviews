<?php 
//Metodos para crear la sesion y actuar en consecuencia a ello

include "model/conexion.php";

session_start();

if (isset($_SESSION["id"])) {
    header("location:index.php") ;
}

if(isset($_POST["email"])){
    $lnk = conectar();
    
    $email = $lnk->real_escape_string($_POST["email"]);
    $contrasena = $lnk->real_escape_string(md5($_POST["contrasena"]));
    $contrasenaC = $lnk->real_escape_string(md5($_POST["contrasenaC"]));
    $alias = $lnk->real_escape_string($_POST["alias"]);
    
    if($contrasena == $contrasenaC){
        $queryComprobar = $lnk->query("SELECT * FROM usuarios WHERE email = '$email';");

        if(!$queryComprobar->num_rows){

            $queryInsertar = $lnk->query("INSERT INTO usuarios VALUES ('$alias', '$contrasena','$email', 'images/profile-default.jpg','0');");
            
            $_SESSION["id"] = session_id();
            $_SESSION["email"] = $_POST["email"];
            header("location:index.php");
            exit();

        }else{
            $error = "<div  class=\"alert alert-danger\">
            <strong>Error</strong> Ese email ya existe</div>";
        }
    }else{
        $error = "<div  class=\"alert alert-danger\">
        <strong>Error</strong> Las contraseñas no coinciden</div>";
    }  
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel=stylesheet href="style/bootstrap.css" type="text/css">
    <link rel=stylesheet href="style/registro.css" type="text/css">
    <title>Registro</title>
    <link rel="icon" href="images/favicon.jpg">
</head>
<body class="jumbotron">

    <div class="container vertical-center jumbotron " style="text-align:center">
        <form class="form-signin" method="POST">
        <h3 class="form-signin-heading">Free Reviews</h3>
            <label class="sr-only" for="email">Email</label>
            <input placeholder="Email" class="form-control" type="email" name="email" id="email" required/>
            <label class="sr-only" for="Alias">Alias</label>
            <input placeholder="Alias" class="form-control" pattern="([a-zA-Z]+)(.){5,22}" type="text" name="alias" id="alias" required/>
            <label class="sr-only" for="contrasena">Contraseña</label>
            <input placeholder="Contraseña" class="form-control" pattern="(.){4,23}" type="password" name="contrasena" id="contrasena" required/>
            <label class="sr-only" for="Ccontrasena">Confirmar Contraseña</label>
            <input placeholder="Confirmar Contraseña" class="form-control" pattern="(.){4,23}" type="password" name="contrasenaC" id="usuario" required/>
            <br/>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Enviar</button>
        </form>
    <a class="nav-link" href="index.php">Seguir como invitado</a>
    <a class="nav-link" href="login.php">Login</a>
    <?= isset($error) ? $error : "" ; ?>
    </div>
</body>
</html>
<?php
include_once "conexion.php" ;
$lnk = conectar();

if(!empty($_POST['email'])) {
    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];
	$sql = "UPDATE usuarios SET contrasena = '$contrasena' WHERE email = '$email';";
	$lnk->query($sql);
}
?>
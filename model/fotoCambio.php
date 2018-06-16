<?php
include_once "conexion.php" ;
$lnk = conectar();
session_start();
if(!empty($_POST['url']) && isset($_SESSION['email'])) {
    $url = $_POST['url'];
    $email = $_SESSION['email'];
    $sql = "UPDATE usuarios SET imagen_perfil = '$url' WHERE email = '$email';";
    echo $sql;
	$lnk->query($sql);
}
?>
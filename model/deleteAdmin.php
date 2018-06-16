<?php
include_once "conexion.php" ;
$lnk = conectar();

if(!empty($_POST['email'])) {
	$email = $_POST['email'];
    $sql1 = "DELETE FROM usuarios WHERE email = '$email' ";
    $sql2 = "DELETE FROM articulos WHERE email = '$email' ";
    $lnk->query($sql1);
    $lnk->query($sql2);
}
?>
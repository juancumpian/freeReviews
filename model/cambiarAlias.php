<?php
include_once "conexion.php" ;
$lnk = conectar();

if(!empty($_POST['email'])) {
    $email = $_POST['email'];
    $alias = $_POST['alias'];
	$sql = "UPDATE usuarios SET alias = '$alias' WHERE email = '$email';";
	$lnk->query($sql);
}
?>
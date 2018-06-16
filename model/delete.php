<?php
include_once "conexion.php" ;
$lnk = conectar();

if(!empty($_POST['id'])) {
	$id = $_POST['id'];
	$sql = "DELETE FROM articulos WHERE ID_Articulo = '$id' ";
	$lnk->query($sql);
}
?>
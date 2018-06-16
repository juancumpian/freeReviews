<?php
include_once "conexion.php" ;
$lnk = conectar();

$idFav = $_POST['idFav'];
$idArticulo = $_POST['idArticulo'];

if(!empty($_POST['idFav']) && !empty($_POST['idArticulo'])) {
	$sqlFav = "DELETE FROM favoritos WHERE ID_favorito = '$idFav' ";
	$lnk->query($sqlFav);

	$sqlArticulo = $lnk->query("SELECT Puntuacion FROM articulos WHERE ID_articulo = '$idArticulo'");

	while($fila = $sqlArticulo->fetch_object()){

		$puntuacion = $fila->Puntuacion;
	}
	$puntuacionArticulo = intval($puntuacion) - 1;

	$sqlPuntuacion = "UPDATE articulos SET puntuacion = '$puntuacionArticulo' WHERE ID_articulo = '$idArticulo'";
	
	$lnk->query($sqlPuntuacion);
}	
?>
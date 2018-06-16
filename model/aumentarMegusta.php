<?php
include_once "conexion.php" ;
$lnk = conectar();

if(!empty($_POST['email']) && !empty($_POST['id'])) {
    $email = $_POST['email'];
    $id_articulo = $_POST['id'];
    $puntuacion = $_POST['puntuacion'];
    $contador = $puntuacion + 1;
    $queryComprobar = $lnk->query("SELECT ID_favorito FROM favoritos;");
            
    $arrayIds = array();
    while($obj = $queryComprobar->fetch_object()){
        $arrayIds[] = $obj;
    }
    
    while(in_array($id = rand(0, 99999999), $arrayIds));
    
	$sqlFavorito = "INSERT INTO favoritos values('$id', '$id_articulo', '$email');";
    $lnk->query($sqlFavorito);
    
    $sqlPuntuacion = "UPDATE articulos SET Puntuacion = '$contador' WHERE ID_Articulo = '$id_articulo';";
    $lnk->query($sqlPuntuacion);
}
?>
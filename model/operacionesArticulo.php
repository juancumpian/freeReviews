<?php

$emailDelMeGusta="";

if(isset($_GET["idArticulo"])){
  $lnk = conectar();

  $idArticulo = $_GET["idArticulo"];
  $queryComprobar = $lnk->query("SELECT a.ID_Articulo, a.contenido, a.email, a.Titulo, a.Puntuacion, c.Nombre_Categoria, u.alias, u.imagen_perfil FROM articulos a inner join categorias c on a.ID_Categoria = c.ID_Categoria inner join usuarios u on a.email=u.email where id_articulo = '$idArticulo';");

  $fila = $queryComprobar->fetch_object();

  $alias = $fila->alias;
  $id = $fila->ID_Articulo;
  $titulo = $fila->Titulo;
  $categoria = $fila->Nombre_Categoria;
  $puntuacion = $fila->Puntuacion;
  $email = $fila->email;
  $contenido = $fila->contenido;
  $imagen = $fila->imagen_perfil;
  if(isset($_SESSION["email"])){
    $emailDelMeGusta = $_SESSION["email"];
  }
  
  $queryComprobarEmailFavorito = "SELECT ID_Articulo FROM favoritos WHERE email = '$emailDelMeGusta' and ID_Articulo = '$id'; ";
  $filaComprobarEmailFavorito = $lnk->query($queryComprobarEmailFavorito);

}else{
  header("location:index.php?errorArticulo") ;
}


?>
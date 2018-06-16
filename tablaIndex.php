<!--carga de tabla del Index.php -->
<?php include "model/conexion.php";
  $lnk = conectar();  
    $query = "SELECT a.ID_Articulo, a.contenido, a.Titulo, a.Puntuacion, c.Nombre_Categoria, u.alias, u.imagen_perfil FROM articulos a inner join categorias c on a.ID_Categoria = c.ID_Categoria inner join usuarios u on a.email=u.email ";
    if (!empty($_GET["busquedaTitulo"])){
      $query.= " AND Titulo LIKE '%" . $_GET["busquedaTitulo"] . "%' ";
    }
    if (!empty($_GET["selectCategorias"])){
      $query.= " AND a.ID_categoria = '" . $_GET["selectCategorias"] . "'";
    }
    $queryComprobar = $lnk->query($query);
    
    while($fila = $queryComprobar->fetch_object()){
      $alias= $fila->alias;
      $id= $fila->ID_Articulo;
      $titulo = $fila->Titulo;
      $categoria = $fila->Nombre_Categoria;
      $puntuacion = $fila->Puntuacion;
      $imagenPerfil = $fila->imagen_perfil;
?>

<div class="card w-100">
  
  <div class="card-body p-0">
    <div class="row">
      <div class="col-4 text-center">
        <img class="img-fluid image" src="<?=$imagenPerfil?>" alt="Card image cap">  
      </div>
      <div class="col-8">
        <div class="content pull-left">
          <h4 class="card-title"><?=$titulo?></h4>
          <p class="card-text">Categoria: <?=$categoria?></p>
          <p class="card-text">Puntuación: </b><?=$puntuacion?></p>
          <p class="card-text">Autor: <?=$alias?></p>
        </div>
      </div>
    </div>
  </div>
  <a href="articulo.php?idArticulo=<?=$id?>" class="btn btn-danger boton-articulo card-footer bg-danger w-100">Ir al artículo</a>
</div>
<?php }?>




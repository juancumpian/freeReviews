

  <div class="card" style="width: 18rem;">
  <div class="card-header" id="mejores">
    Más Votados
  </div>
  <ul class="list-group list-group-flush ">
  

  
<?php

    $query = "SELECT a.ID_Articulo, a.contenido, a.Titulo, a.Puntuacion, u.alias FROM articulos a INNER JOIN usuarios u on a.email=u.email ORDER BY a.Puntuacion DESC LIMIT 5";
    
    $queryComprobar = $lnk->query($query);
    
    while($fila = $queryComprobar->fetch_object()){
      $alias= $fila->alias;
      $id= $fila->ID_Articulo;
      $titulo = $fila->Titulo;
      $puntuacion = $fila->Puntuacion;
?>
  <a class="boton-mejores" href="articulo.php?idArticulo=<?=$id?>">
    <div class="card-header"> 
      Título: <?=$titulo?>
    </div>
  </a>

  <ul class="list-group list-group-flush">
    <li class="list-group-item">
      <p class="m-0">Puntuación: <?=$puntuacion?></p>
      <p class="m-0">Autor: <?=$alias?></p>
      
    </li>  
  
<?php }?>

    
  
    </ul>
</div>

    <h4>Mis Favoritos</h4>
    <div class ="table-responsive">
        <table class="table">
            <tr>
                <th>Título</th>
                <th>Categoria</th>
                <th>Puntuacion</th>
                <th>Acciones</th>
            </tr>
          <!-- Tabla de articulos que el usuario los a añadido a mis favoritos -->
          <tbody>
                <?php
                   
                    $queryComprobar = $lnk->query("SELECT f.ID_favorito, f.ID_Articulo, f.email,  a.Titulo, a.Puntuacion, c.Nombre_Categoria FROM articulos a inner join categorias c on a.ID_Categoria = c.ID_Categoria inner join favoritos f on a.ID_Articulo=f.ID_Articulo where f.email = '$email' ;");
                    while($fila = $queryComprobar->fetch_object()){
                      
                      $idFavorito= $fila->ID_favorito;
                      $id= $fila->ID_Articulo;
                      $titulo = $fila->Titulo;
                      $categoria = $fila->Nombre_Categoria;
                      $puntuacion = $fila->Puntuacion;
                      $email = $fila->email;
                ?>
                <tr class="table-row" id="table-row-<?=$idFavorito?>">
                  <td><a href="articulo.php?idArticulo=<?=$id?>"><?=$titulo?></a></td>
                  <td><?=$categoria?></td>
                  <td><?=$puntuacion?></td>
                  <td><a class="ajax-action-links" onclick='deleteRowFav(<?=$idFavorito?>, <?=$id?>);'><img class="icono" src="images/delete.png"/></a></td>
                </tr>
                <?php } ?>
          </tbody>
        </table>
    </div>

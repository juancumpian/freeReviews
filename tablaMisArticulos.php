    <h4>Mis Articulos</h4>
    <div class ="table-responsive">
        <table class="table">
            <tr>
                <th>Título</th>
                <th>Categoria</th>
                <th>Puntuacion</th>
                <th>Acciones</th>
            </tr>
          <!-- Tabla de articulos escritos por el usuario -->
          <tbody>
                <?php
                  $lnk = conectar();  
                    $queryComprobar = $lnk->query("SELECT ID_Articulo, Titulo, Puntuacion, Nombre_Categoria FROM articulos inner join categorias on articulos.ID_Categoria = categorias.ID_Categoria where email = '$email' ;");
                    while($fila = $queryComprobar->fetch_object()){

                      $id= $fila->ID_Articulo;
                      $titulo = $fila->Titulo;
                      $categoria = $fila->Nombre_Categoria;
                      $puntuacion = $fila->Puntuacion;
                ?>
                <tr class="table-row" id="table-row-<?=$id?>">
                  <td><a href="articulo.php?idArticulo=<?=$id?>"><?=$titulo?></a></td>
                  <td><?=$categoria?></td>
                  <td><?=$puntuacion?></td>
                  <td><a class="ajax-action-links" href="modificarArticulo.php?idArticulo=<?=$id?>"><img class="icono" src="images/modify.png"/></a><a class="ajax-action-links" onclick='deleteRow(<?=$id?>);'><img class="icono" src="images/delete.png"/></a></td>
                </tr>
                <?php } ?>
          </tbody>
        </table>
    </div>

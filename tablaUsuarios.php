<?php 
$queryAdmin = $lnk->query("SELECT admin FROM usuarios where email = '$email';");
$filaAdmin = $queryAdmin->fetch_object();
  if($filaAdmin->admin == 1){?>
    <div id = "container">
    <h4>Usuarios</h4>
    <div class ="table-responsive">
        <table class="table">
            <tr>
                <th>Imagen Perfil</th>
                <th>Alias</th>
                <th>Email</th>
                <th>Imagen de perfil</th>
                <th>Acciones</th>
            </tr>
          <!-- Tabla de usuarios -->
          <tbody>
                <?php
                    $queryComprobar = $lnk->query("SELECT * FROM usuarios;");
                    while($fila = $queryComprobar->fetch_object()){
                      $alias= $fila->alias;
                      $contrasena = $fila->contrasena;
                      $email = $fila->email;
                      $imagen = $fila->imagen_perfil;
                ?>
                <tr class="table-row" id="<?=$id?>">
                  <td ><img src="<?=$imagen?>" style="height:50px;!important"/></td>
                  <td><?=$alias?></td>
                  <td><?=$email?></td>
                  <td><?=$imagen?></td>
                  <td><a class="ajax-action-links" onclick='deleteRowAdmin("<?=$id?>", "<?=$email?>");'><img class="icono" src="images/delete.png"/></a></td>
                </tr>
                <?php } ?>
          </tbody>
        </table>
    </div>
  <?php }?>
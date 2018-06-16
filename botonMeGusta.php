<?php if(!$filaComprobarEmailFavorito->fetch_object()){
          if(isset($_SESSION["email"])){ ?>
  <div id= "meGusta">
    <a id="linkMegusta" class="ajax-action-links" onclick='likeIt("<?=$id?>", "<?=$puntuacion?>", "<?=$emailDelMeGusta?>");'>
      <img id="me-gusta" src="images/megusta.svg"/>
    </a>
  </div>
  <?php } else { ?>
    <div id= "meGusta">
     <a id="linkMegusta" href="index.php?iniciaSesion">
      <img id="me-gusta" src="images/megusta.svg"/>
    </a>
  </div>
  <?php } ?>
  <?php } else { ?>
    <div id= "meGusta">
      <img id="me-gusta" src="images/gustado.svg"/>
  </div>
  <?php } ?>
<!-- cabecera de todas las páginas del proyecto-->
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="navbar-general">
  <a class="navbar-brand active" href="index.php">FreeReviews</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link active" href="escribirArticulo.php">Escribir Artículo</a>
      </li>
        <?=$botonPerfil ?> 
      <li class="nav-item">
        <?=$botonSession ?>
      </li>
    </ul>
    <?php
      if (stripos($_SERVER['REQUEST_URI'], 'index.php')){
        echo '
        <form class="form-inline mw-5">
          <select class="custom-select" id="selectCategorias">
            <option value="0" selected>Buscar categoría</option>
            <option >Películas</option>
            <option value="1">Series</option>
            <option value="2">Videojuegos</option>
            <option value="3">Cortos</option>
            <option value="4">Comics</option>
            <option value="5">Otros</option>
          </select>
        </form>

        
        <form class="form-inline">
          <input class="form-control" type="text" id="buscaTitulo" value="" placeholder="Buscar"/>
        </form>';
      }
    ?>
  </div>
</nav>

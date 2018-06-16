<?php 
include "model/conexion.php";
//Metodos para crear la sesion y actuar en consecuencia a ello

session_start();
$botonSession = "";
$botonPerfil = "";
$lnk = conectar();
if(isset($_SESSION["id"])){
  $botonSession = "<a class=\"nav-link\" href=\"index.php?cerrarSesion\">Cerrar Sesión</a>";
  
  $botonPerfil = "<li class=\"nav-item\">
    <a class=\"nav-link active\" href=\"perfil.php\">Perfil</a>
    </li>  ";
}else{
    header("location:index.php");
}
if(isset($_SESSION["id"])){
  $botonSession = "<a class=\"nav-link\" href=\"index.php?cerrarSesion\">Cerrar Sesión</a>";
  
  $botonPerfil = "<li class=\"nav-item\">
    <a class=\"nav-link active\" href=\"perfil.php\">Perfil</a>
    </li>  ";
}else{
    header("location:index.php?iniciaSesion");
}

if (isset($_GET["cerrarSesion"])) {
  $_SESSION[] = array() ;
  session_destroy() ;
  header("location:login.php") ;
}

if(isset($_POST["titulo"])){
  $queryComprobar = $lnk->query("SELECT ID_Articulo FROM articulos;");
  
  $arrayIds = array();
  while($obj = $queryComprobar->fetch_object()){
      $arrayIds[] = $obj;
  }
  
  while(in_array($id = rand(0, 99999999), $arrayIds));
  
  $email = $_SESSION["email"];
  $titulo = $lnk->real_escape_string($_POST["titulo"]);
  $categoria = $lnk->real_escape_string($_POST["categoria"]);
  $contenido = $lnk->real_escape_string($_POST["edit"]);
  $queryInsertar = $lnk->query("INSERT INTO articulos VALUES ('$id', '$titulo', '$contenido', 0, '$email','$categoria');");
  header("location:articulo.php?idArticulo=$id");
  exit();  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Escribir</title>
  <link rel="icon" href="images/favicon.jpg">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style/froala_editor.css">
  <link rel="stylesheet" href="style/froala_style.css">
  <link rel="stylesheet" href="style/plugins/code_view.css">
  <link rel="stylesheet" href="style/plugins/draggable.css">
  <link rel="stylesheet" href="style/plugins/colors.css">
  <link rel="stylesheet" href="style/plugins/emoticons.css">
  <link rel="stylesheet" href="style/plugins/image_manager.css">
  <link rel="stylesheet" href="style/plugins/image.css">
  <link rel="stylesheet" href="style/plugins/line_breaker.css">
  <link rel="stylesheet" href="style/plugins/table.css">
  <link rel="stylesheet" href="style/plugins/char_counter.css">
  <link rel="stylesheet" href="style/plugins/video.css">
  <link rel="stylesheet" href="style/plugins/fullscreen.css">
  <link rel="stylesheet" href="style/plugins/quick_insert.css">
  <link rel="stylesheet" href="style/plugins/help.css">
  <link rel="stylesheet" href="style/third_party/spell_checker.css">
  <link rel="stylesheet" href="style/plugins/special_characters.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"> 
  <link rel="stylesheet" href="style/escribirArticulo.css">
  <link rel="stylesheet" href="style/container.css">
</head>

<?php include "cabecera.php"?>
<div class="container">
  <div id="editor">
    <form method="POST">
    <label for="titulo" class="encabezado">Título</label>
    <input placeholder="Inserta Título" class="form-control" type="text" name="titulo" id="titulo" required/>
    <label for="categoria" class="encabezado">Categoría</label>
    <select class="form-control" type="select" name="categoria" id="categoria" required/>
      <option value="0">Películas</option>
      <option value="1">Series</option>
      <option value="2">Videojuegos</option>
      <option value="3">Cortos</option>
      <option value="4">Comics</option>
      <option value="5">Otros</option>
    </select>
    
      <textarea name="edit" id='edit' required>
      </textarea>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Enviar</button>
    </form>
  </div>
  <?= isset($error) ? $error : "" ; ?>
  </div>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script>
  <script type="text/javascript" src="js/froala_editor.min.js" ></script>
  <script type="text/javascript" src="js/plugins/align.min.js"></script>
  <script type="text/javascript" src="js/plugins/char_counter.min.js"></script>
  <script type="text/javascript" src="js/plugins/code_beautifier.min.js"></script>
  <script type="text/javascript" src="js/plugins/code_view.min.js"></script>
  <script type="text/javascript" src="js/plugins/colors.min.js"></script>
  <script type="text/javascript" src="js/plugins/draggable.min.js"></script>
  <script type="text/javascript" src="js/plugins/emoticons.min.js"></script>
  <script type="text/javascript" src="js/plugins/entities.min.js"></script>
  <script type="text/javascript" src="js/plugins/font_size.min.js"></script>
  <script type="text/javascript" src="js/plugins/font_family.min.js"></script>
  <script type="text/javascript" src="js/plugins/fullscreen.min.js"></script>
  <script type="text/javascript" src="js/plugins/image.min.js"></script>
  <script type="text/javascript" src="js/plugins/image_manager.min.js"></script>
  <script type="text/javascript" src="js/plugins/line_breaker.min.js"></script>
  <script type="text/javascript" src="js/plugins/inline_style.min.js"></script>
  <script type="text/javascript" src="js/plugins/link.min.js"></script>
  <script type="text/javascript" src="js/plugins/lists.min.js"></script>
  <script type="text/javascript" src="js/plugins/paragraph_format.min.js"></script>
  <script type="text/javascript" src="js/plugins/paragraph_style.min.js"></script>
  <script type="text/javascript" src="js/plugins/quick_insert.min.js"></script>
  <script type="text/javascript" src="js/plugins/quote.min.js"></script>
  <script type="text/javascript" src="js/plugins/table.min.js"></script>
  <script type="text/javascript" src="js/plugins/save.min.js"></script>
  <script type="text/javascript" src="js/plugins/url.min.js"></script>
  <script type="text/javascript" src="js/plugins/video.min.js"></script>
  <script type="text/javascript" src="js/plugins/print.min.js"></script>
  <script type="text/javascript" src="js/third_party/spell_checker.min.js"></script>
  <script type="text/javascript" src="js/plugins/special_characters.min.js"></script>
  <script type="text/javascript" src="js/plugins/word_paste.min.js"></script>
  <script type="text/javascript" src="js/plugins/help.min.js"></script>

  <script>
    $(function(){
      $('#edit').froalaEditor()
    });
  </script>

  
 
</body>
</html>
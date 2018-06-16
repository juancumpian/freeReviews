function deleteRowFav(idFav, idArticulo) {
    if(confirm("¿seguro que quieres eliminar este articulo favorito?")) {
      $.ajax({
        url: "model/deleteFavorito.php",
        type: "POST",
        data:{idFav : idFav, idArticulo : idArticulo},
        success: function(data){
          $("#table-row-"+idFav).fadeOut();
          }
        });
      }
    }

    
  function deleteRowAdmin(id, email){
    if(confirm("¿seguro que quieres eliminar este usuario?")) {
      $.ajax({
        url: "model/deleteAdmin.php",
        type: "POST",
        data:'email='+email,
        success: function(data){
        $('#'+id).fadeOut();
        }
      });
    }
  }

  function deleteRow(id) {
    if(confirm("¿seguro que quieres eliminar este articulo?")) {
      $.ajax({
        url: "model/delete.php",
        type: "POST",
        data:'id='+id,
        success: function(data){
          $("#table-row-"+id).fadeOut();
          }
        });
      }
    }
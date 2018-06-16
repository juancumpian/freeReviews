function likeIt(id, puntuacion, email){
    $.ajax({
      url: "model/aumentarMeGusta.php",
      type: "POST",
      data:{'id': id, 'email': email, 'puntuacion': puntuacion },
      success: function(data){
        puntuacion_total = parseInt($('#spanPuntuacion').text());
        puntuacion_total++;
        $('#spanPuntuacion').text(puntuacion_total);
        $('.container').append("<div class='alert alert-warning alert-dismissible fade show' role='alert'><b>Le has dado a me gusta</b><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>");
        $('#linkMegusta').prop("onclick", false);
        $('#me-gusta').attr("src","images/gustado.svg");
      }
    });
}

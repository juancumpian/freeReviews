$("document").ready(function() {

    $('input[type=file]').on("change", function() {
    
      var $files = $(this).get(0).files;
    
      if ($files.length) {
        var settings = {
          async: false,
          crossDomain: true,
          processData: false,
          contentType: false,
          type: 'POST',
          url: 'https://api.imgur.com/3/image',
          headers: {
            Authorization: 'Client-ID 2370564d363e916',
            Accept: 'application/json'
          },
          mimeType: 'multipart/form-data'
        };
    
        var formData = new FormData();
        formData.append("image", $files[0]);
        settings.data = formData;
        $.ajax(settings).done(function(response) {
          var json = JSON.parse(response);
          urlEnviar = json.data.link;
          $.ajax({
          url: "model/fotoCambio.php",
          type: "POST",
          data:'url='+urlEnviar,
          success: function(data){
            $('img').remove();
            img = "<img src= "+urlEnviar+" id='url'/>";
            $('#contenedor').append(img);
            setTimeout(function(){window.location.replace("perfil.php");}, 3000);
            
          }
        });
        });
      }
    });
    });
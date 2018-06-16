$(document).on("keypress keyup","#buscaTitulo",function(){		
    var valor= $("#buscaTitulo").val();
  $.get("tablaIndex.php" ,
  {busquedaTitulo: valor},
      function(data){
           $("#tablaArticulos").html(data);
       });	
});
$(document).on("change","#selectCategorias",function(){		
    var valor= $("#selectCategorias").val();
  $.get("tablaIndex.php" ,
  {selectCategorias: valor},
      function(data){
           $("#tablaArticulos").html(data);
       });	
});
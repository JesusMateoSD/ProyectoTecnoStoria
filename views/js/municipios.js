$(document).ready(function(){
  $("#dpto").change(function () {
    $("#dpto option:selected").each(function () {
      id_departamento = $(this).val();
      $.post("views/modules/municipios.php", { id_departamento: id_departamento }, function(data){
        $("#municipio").html(data);
      });            
    });
  })
});
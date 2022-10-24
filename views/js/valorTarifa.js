$(document).ready(function(){
  $("#productos").change(function () {
    $("#productos option:selected").each(function () {
      producto = $(this).val();
      $.post("views/modules/valortarifa.php", { producto: producto }, function(data){
        $("#valor").html(data);
      });            
    });
  })
});
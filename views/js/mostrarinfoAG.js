function mostrarInfo(){
  var url = "views/modules/proceso.php"; 
  $.ajax({                        
    type: "POST",                 
    url: url,                    
    data: $("#myForm").serialize(),
    success: function(data){
      $('#datos').html(data);           
    }
  });
}
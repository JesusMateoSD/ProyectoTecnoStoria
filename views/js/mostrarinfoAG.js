function mostrarInfo(){
  var url = "index.php?action=proceso"; 
  $.ajax({                        
    type: "POST",                 
    url: url,                    
    data: $("#myForm").serialize(),
    success: function(data){
      $('#datos').html(data);           
    }
  });
}
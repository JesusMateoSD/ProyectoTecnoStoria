<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">
            <!--
              function funcion(){
                    
    alert('campo oculto cambiado');

                 }
              </script>


              <input type="submit" name="" value="Buscar" id="boton1" onclick = "funcion();">



<script src="../js/custom-file-input.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">
  $("table tbody tr").click(function() {
  var hora = $(this).find("td").eq(0).text();
  document.getElementById('hora').value= hora;
  var fecha = $(this).find("td").eq(1).text();
  document.getElementById('fecha').value= fecha;
  var cedula = $(this).find("td").eq(2).text();
  document.getElementById('cedula').value= cedula;
  var paciente = $(this).find("td").eq(3).text();
  document.getElementById('paciente').value= paciente;
  var telefono = $(this).find("td").eq(4).text();
  document.getElementById('telefono').value= telefono;
  var nivel = $(this).find("td").eq(5).text();
  document.getElementById('nivel').value= nivel;
  var obs = $(this).find("td").eq(6).text();
  document.getElementById('obs').value= obs;
});


</script>  

</script>  



 <input type="submit" name="" value="Buscar" id="boton1" onclick = "funcion();">  
            <script type="text/javascript">
            function funcion(){
                    
         alert('campo oculto cambiado');

                 }
              </script>


              value =" <?php echo $fechahoy = date('Y-m-d'); ?>?>"




              <script type="text/javascript">
function funcion1(){  
$(document).ready(function(){
    $("#fecha").change(function(){
        let url = "proceso.php";
        var dato = $("#fecha").val();
        $.post(url, {'fecha':dato}, function(data){
                 alert( 'data')
            }); 
    });
});
}
</script>


<?php
  session_start();
  include('../db.php');
  include('../header/header.php');
  $fechahoy = date('Y-m-d');           
?>

<main class="container p-0">
  <link rel="stylesheet" href="../cssjs/stylecute.css" />
  <script src="../cssjs/cute-alert.js"></script>
  <script language="javascript" src="../cssjs/jquery-3.1.1.min.js"></script>
  <div class="p-2 mb-2 bg-primary text-white">Agenda Citas</div>
  <div class="container">
    <div class="row">
      <form id="myForm"   method="POST" >
        <div class="form-row">
          <div class="col-md-5 mb-4">
            <select class="custom-select mr-sm-2"  onchange="alerta();" name="profesional" id="profesional" >
              <option value="0">Seleccione Profesional:</option>
                <?php
                  $query = $mysqli -> query ("SELECT * FROM tbl_usuarios WHERE nivel = 2");
                  while ($valores = mysqli_fetch_array($query)) {
                  echo '<option value="'.$valores['nombre'].'">'.$valores['nombre'].'</option>';
                  }
                ?>
            </select>
          </div>  
          <div class="col-md-2 mb-4">
            <input type="text" name="docp" id="docp" class="form-control" readonly>
          </div>
          <div class="col-md-2 mb-4">
            <input type="date" name="fecha" id="fecha" value="<?php echo  $fechahoy = date('Y-m-d'); ?>"  class="form-control" placeholder="Fecha"  onchange="mostrarInfo()">
          </div>
          <div class="col-md-3 mb-4">
            <select class="custom-select mr-sm-2"  name="hora" id="hora" >
              <option value="0">Seleccione Hora:</option>
                <?php
                  $query = $mysqli -> query ("SELECT * FROM tbl_horas ");
                  while ($valores = mysqli_fetch_array($query)) {
                  echo '<option value="'.$valores['hora'].'">'.$valores['hora'].'</option>';
                  }
                ?>
            </select>
          </div>  
          <div class="col-md-3 mb-4">
            <input type="text" name="cedula" id="cedula" class="form-control" onBlur="alertap();" placeholder="Cedula" autofocus>
          </div>
          <div class="col-md-4 mb-4">
            <input type="text" name="paciente" id="paciente" class="form-control" placeholder="Paciente" autofocus>
          </div> 
          <div class="col-md-2 mb-4">
            <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Telefono" autofocus>
          </div>
          <div class="col-md-3 mb-4">
            <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
            <select class="custom-select mr-sm-2" name="nivel" id="nivel">
              <option selected>Estado...</option>
              <option value="Asignada">Asignada</option>
              <option value="Cumplida">Cumplida</option>
              <option value="Cancelada">Cancelada</option>
              <option value="Incumplida">Incumplida</option>
            </select>
          </div>
          <div class="col-md-12 mb-4">
            <input type="text" name="obs" id="obs" class="form-control" placeholder="Observaciones" autofocus>
          </div>
        </div>
        <input type="submit" id="salvaragenda" name="salvaragenda" class="btn btn-primary " value="Grabar Cita"> 
      </form>
    </div>
  </div>
  <br>
  <div id="datos"></div>
</main>

<script>
  document.getElementById("profesional").onchange = function(){alerta()};
  function alerta() {
    // Creando el objeto para hacer el request
    var request = new XMLHttpRequest();
    request.responseType = 'json';
    // Objeto PHP que consultaremos
    request.open("POST", "services.php");
    // Definiendo el listener
    request.onreadystatechange = function() {
      // Revision si fue completada la peticion y si fue exitosa
      if(this.readyState === 4 && this.status === 200) {
        // Ingresando la respuesta obtenida del PHP
        var nombrer = this.response.message;
        if(nombrer === "vacio"){
          alert("Este Profesional No Existe en El Sistema.");
        }else{
        document.getElementById("docp").value = this.response.registro;
        }    
      }
    };
    // Recogiendo la data del HTML
    var myForm = document.getElementById("myForm");
    var formData = new FormData(myForm);
    // Enviando la data al PHP
    request.send(formData);
  }

  function handler(e){
    alert(e.target.value);
  }
</script>

<script>
  function mostrarInfo(){
    var url = "proceso.php";                                      
    $.ajax({                        
      type: "POST",                 
      url: url,                    
      data: $("#myForm").serialize(),
      success: function(data)            
      {
        $('#datos').html(data);           
      }
    });  
  }
</script>

<script>
  function mostrarInfom(cod){
    $("#datos").load('procesom.php');
    if (window.XMLHttpRequest){
      xmlhttp=new XMLHttpRequest();
    } else{
      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    //xmlhttp.onreadystatechange=function()
    //{
    if (xmlhttp.readyState==4 && xmlhttp.status==200){
      document.getElementById("datos").innerHTML=xmlhttp.responseText;
    } else{
      document.getElementById("datos").innerHTML='Cargando...';
    }
    //}
    xmlhttp.open("POST","procesom.php",true);
    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");

    //var codp = document.getElementsByName("fecha")[0].value;
    var codp = "<?php echo $fecham; ?>";
    xmlhttp.send("fecha="+codp);
  }
</script>


<script>
  function mostrarInfori(cod){
    $("#datos").load('procesoi.php');
    if (window.XMLHttpRequest){
      xmlhttp=new XMLHttpRequest();
    } else{
      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }

    if (xmlhttp.readyState==4 && xmlhttp.status==200){
      document.getElementById("datos").innerHTML=xmlhttp.responseText;
    } else{
      document.getElementById("datos").innerHTML='Cargando...';
    }

    xmlhttp.open("POST","procesoi.php",true);
    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
  }
</script>

<script>
  //  document.getElementById("codigo").onchange = function(){alerta()};
  function alertap() {
    // Creando el objeto para hacer el request
    var request = new XMLHttpRequest();
    request.responseType = 'json';
    // Objeto PHP que consultaremos
    request.open("POST", "consultapaciente.php");
    // Definiendo el listener
    request.onreadystatechange = function() {
      // Revision si fue completada la peticion y si fue exitosa
      if(this.readyState === 4 && this.status === 200) {
        // Ingresando la respuesta obtenida del PHP
        var nombrer = this.response.message;
        if(nombrer === "vacio"){
          cuteAlert({
            type: "info",
            title: "Advertencia",
            message: "Debe Crear Primero El Paciente Para Agendar",
            buttonText: "Aceptar"
          }).then((e)=>{
            if ( e == ("Thanks")){

            } else {
              window.location.href="indexagenda.php";
            }
          })
        } else{
          document.getElementById("paciente").value = this.response.paciente;
          document.getElementById("telefono").value = this.response.telefono;
          //document.getElementById('cantidad').focus();
        }   
      }
    };
    
    // Recogiendo la data del HTML
    var myForm = document.getElementById("myForm");
    var formData = new FormData(myForm);

    // Enviando la data al PHP
    request.send(formData);
  }
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#salvaragenda').click(function(){
      var datos=$('#myForm').serialize();
      $.ajax({
        type:"POST",
        url:"salvaragenda.php",
        data:datos,
        success:function(r){
          if(r==1){
          //  alert("agregado con exito");
          }else{
            mostrarInfo();
          // $("#datos").load('proceso.php');
          }
        }
      });
      return false;
    });
  });
</script>
             <!-- FIN PHP INDEX SUPER PARAMETROS -->
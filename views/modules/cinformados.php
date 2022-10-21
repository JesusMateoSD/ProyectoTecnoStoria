<?php
            session_start();
            include('../db.php');
            include('../includes/header.php');
            $fechahoy = date('Y-m-d');

 
            $query = "SELECT * FROM tbl_pacientes WHERE documento='$_SESSION[scedulap]'";
            $result = mysqli_query($mysqli, $query);
            $row = mysqli_fetch_array($result);
            $nombrep = $row["paciente"];
            $td = $row["tipodocumento"];
            $documento = $row["documento"];
            $dir = $row["direccion"];
            $tel = $row["telefono"];
            $edad = $row["edad"];
            $fechan = $row["fechan"];

?>
 
<head>
   <link rel="stylesheet" href="../cssjs/stylecute.css" />
   <script src="../cssjs/cute-alert.js"></script>
   <link rel="stylesheet" type="text/css" href="../cssjs/datatables.min.css"/>
   <script language="javascript" src="../cssjs/jquery-3.6.0.min.js"></script>
   <script type="text/javascript" src="../cssjs/datatables.min.js"></script>
   <script type="text/javascript">
     $(document).ready( function () {
    $('#tablecinformado').DataTable();
    } );
   </script>

  
   </head>


<main class="container ">
  
   <div class="p-2 mb-2 bg-primary text-white">Crear Consentimiento Informado</div>

<hr>  
  
    
     
      <body onload="detalleinicio()">
      <div class="container">
         <div class="row">
     
        <form id="myForm" name="f"  method="POST" >
           <div class="form-row">

             <div class="col-md-2 mb-2">
             <label for="usr">Fecha:</label> 
            <input type="text" name="fecha" class="form-control"  value="<?php echo  $fechahoy = date('Y-m-d'); ?>"  readonly>
          </div>

           <div class="col-md-2 mb-2">
             <label for="usr">Hora:</label> 
            <input type="text" name="hora" class="form-control"  value="<?php echo  date("H:i:s"); ?>"  readonly>
          </div>

          <div class="col-md-2 mb-2">
             <label for="usr">Tipo Documento:</label> 
            <input type="text" name="td" class="form-control"  value="<?php echo  $td; ?>"  readonly>
          </div>

          <div class="col-md-6 mb-2">
            <label for="usr">Paciente:</label> 
            <input type="text" name="paciente" id="paciente" class="form-control" value="<?php echo  $nombrep; ?>" readonly >
          </div>

          
          <div class="col-md-2 mb-2">
            <label for="usr">Documento:</label> 
            <input type="text" name="documento" id="documento" class="form-control" value="<?php echo  $documento; ?>" readonly  >
          </div>

           <div class="col-md-4 mb-2">
            <label for="usr">Direccion:</label> 
            <input type="text" name="dir" id="dir" class="form-control" value="<?php echo  $dir; ?>" readonly  >
          </div>

          <div class="col-md-3 mb-2">
            <label for="usr">Telefono:</label> 
            <input type="text" name="tel" id="tel" class="form-control" value="<?php echo  $tel; ?>" readonly  >
          </div>

           <div class="col-md-1 mb-2">
            <label for="usr">Edad:</label> 
           <input type="text" name="edad" class="form-control" id="edad" value="<?php echo  $edad; ?>" readonly>
          </div>

          <div class="col-md-2 mb-2">
            <label for="usr">Fecha N:</label> 
           <input type="text" name="fechan" class="form-control" id="fechan" value="<?php echo  $fechan; ?>" readonly>
          </div>

          <div class="col-md-12 mb-2">
          <div class="p-2 mb-2 bg-primary "></div>
         </div>


         
          <div class="col-md-6 mb-4">
             <label for="usr">Modelos</label> 
              <select class="custom-select mr-sm-2"   name="modelos" id="modelos" >
                  <option value="0">Seleccione Modelo</option>
                 <?php
                 $query = $mysqli -> query ("SELECT * FROM tbl_modeloc ");
                 while ($valores = mysqli_fetch_array($query)) {
                 echo '<option value="'.$valores['nombre'].'">'.$valores['nombre'].'</option>';
                 }
                ?>
              </select>
        </div>  


       

          <div class="col-md-12 mb-2">
          <label for="exampleFormControlTextarea1">Consentimiento:</label>
          <textarea class="form-control rounded-0" name="consentimientos" id="consentimientos" rows="4"></textarea>
        </div>

        <div class="col-md-12 mb-2">
          <div class="p-2 mb-2 bg-primary "></div>
         </div>

 

       </div>
         
          <input  name="salvarcinformados" id="salvarcinformados" class="btn btn-primary " value="Grabar C. Informado">
           <a href="../hclinica/indexhclinica.php?id=<?php echo $_SESSION['scedulap']?>" class="btn btn-primary">Salir</a>


        
        </form>
      </div>
    </div>
   <br>
     <div id="tablacinformados"></div>
    
  </div>
  </div>
</main>

 

  <script type="text/javascript">
  $(document).ready(function(){
    $('#salvarcinformados').click(function(){
      var datos=$('#myForm').serialize();
      $.ajax({
        type:"POST",
        url:"salvarcinformados.php",
        data:datos,
        success:function(r){
          if(r==1){
            alert("agregado con exito");
          }else{
          //  alert("agregado con exito");
         $("#tablacinformados").load('mostrarcinformados.php');
          }
        }
      });

      return false;
    });
  });
</script>

<script type="text/javascript">
       function detalleinicio() { 
       
     $("#tablacinformados").load('mostrarcinformados.php');
       
 }
    </script>


     <script>
          document.getElementById("modelos").onchange = function(){alerta()};
          function alerta() {
              // Creando el objeto para hacer el request
              var request = new XMLHttpRequest();
              request.responseType = 'json';
              // Objeto PHP que consultaremos
              request.open("POST", "modeloci.php");
             // Definiendo el listener
              request.onreadystatechange = function() {
                  // Revision si fue completada la peticion y si fue exitosa
                  if(this.readyState === 4 && this.status === 200) {
                      // Ingresando la respuesta obtenida del PHP
                     var nombrer = this.response.message;
                    if(nombrer === "vacio"){
                          alert("Este Modelo No Existe en El Sistema.");
                          
                      }else{
                      document.getElementById("consentimientos").value = this.response.modelo;
                      
                   //   document.getElementById('cantidad').focus();
                 
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
   
             <!-- FIN PHP INDEX SUPER USUARIO -->

   <?php
        //     include('../includes/footer.php');
  ?>

 
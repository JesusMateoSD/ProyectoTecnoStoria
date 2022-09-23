<?php ob_start() ?>
<?php 

include('../includes/header.php');
include("../db.php");


if  (isset($_GET['id'])) {
  $id = $_GET['id'];
 // $_SESSION[scedulap] = $id;
  $query = "SELECT * FROM tbl_agenda WHERE id=$id";
  $result = mysqli_query($mysqli, $query);
  if (mysqli_num_rows($result) == 1) {
  $row = mysqli_fetch_array($result);
  $horag = $row['horag'];
  $fecha =  $row['fecha'];
  $dpaciente = $row['dpaciente'];
  $npaciente =$row['npaciente'];
  $tpaciente = $row['tpaciente'];
  
  $estado = $row['estado'];
  $obs = $row['obs'];
  $nprofesional = $row['nprofesional'];
  $dprofesional = $row['dprofesional'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $profesional= $_POST['profesional'];
  $docp = $_POST['docp'];
  $fecha = $_POST['fecha'];
  $hora = $_POST['hora'];
  $cedula = $_POST['cedula'];

  $paciente = $_POST['paciente'];
  $telefono = $_POST['telefono'];
  $nivel = $_POST['nivel'];
  $obs = $_POST['obs'];

  $query = "UPDATE tbl_agenda set fecha = '$fecha', horag = '$hora', nprofesional = '$profesional', dprofesional = '$docp', npaciente = '$paciente', dpaciente = '$cedula' , tpaciente = '$telefono', estado = '$nivel', obs = '$obs' WHERE id=$id";
  mysqli_query($mysqli, $query);
  $_SESSION['message'] = 'Cita Actualizada Correctamente';
  $_SESSION['message_type'] = 'warning';
  header('Location: indexagenda.php');
 // header('Location:  indexagenda.php?idf='. $fecha);
}
 ?>

<div class="container">
<div class="row"> 

    
    <form  id="myForm" action="editpagenda.php?id=<?php echo $_GET['id']; ?>" method="POST" >
		<div class="p-2 mb-2 bg-primary text-white">Actualizar  Agenda</div>
     <br>
	  <div class="form-row">
      <div class="col-md-5 mb-4">
          <select class="custom-select mr-sm-2"  onchange="alerta();" name="profesional" id="profesional" >
            <option value="<?php echo $nprofesional; ?>" selected><?php echo $nprofesional; ?></option>
               <?php
               $query = $mysqli -> query ("SELECT * FROM tbl_usuarios WHERE nivel = 2");
               while ($valores = mysqli_fetch_array($query)) {
               echo '<option value="'.$valores[nombre].'">'.$valores[nombre].'</option>';
               }
              ?>
        </select>
        </div>  
	   <div class="col-md-2 mb-4">
            <input type="text" name="docp" id="docp"   class="form-control"  value="<?php echo $dprofesional; ?>" readonly>
          </div>

          <div class="col-md-2 mb-4">
            <input type="date" name="fecha" id="fecha" class="form-control" placeholder="Fecha"  value="<?php echo $fecha; ?>" autofocus>
          </div>

          
          <div class="col-md-3 mb-4">
          <select class="custom-select mr-sm-2"  name="hora" id="hora" >
            <option value="<?php echo $horag; ?>" selected><?php echo $horag; ?></option>
               <?php
               $query = $mysqli -> query ("SELECT * FROM tbl_horas ");
               while ($valores = mysqli_fetch_array($query)) {
               echo '<option value="'.$valores[hora].'">'.$valores[hora].'</option>';
               }
              ?>
        </select>
        </div>  


       <div class="col-md-3 mb-4">
            <input type="text" name="cedula" id="cedula" class="form-control" placeholder="Cedula" value="<?php echo $dpaciente; ?>" autofocus>
          </div>
         <div class="col-md-4 mb-4">
            <input type="text" name="paciente" id="paciente" class="form-control" placeholder="Paciente" value="<?php echo $npaciente; ?>"autofocus>
          </div> 
          
       <div class="col-md-2 mb-4">
            <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Telefono" value="<?php echo $tpaciente; ?>" autofocus>
          </div>

        <div class="col-md-3 mb-4">
        <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
        <select class="custom-select mr-sm-2" name="nivel" id="nivel"  >
        <option selected value="<?php echo $estado; ?>"><?php echo $estado; ?></option>
        <option value="Asignada">Asignada</option>
        <option value="Cumplida">Cumplida</option>
        <option value="Cancelada">Cancelada</option>
        <option value="Incumplida">Incumplida</option>
        
        </select>
       </div>

       <div class="col-md-12 mb-4">
            <input type="text" name="obs" id="obs" class="form-control" placeholder="Observaciones" value="<?php echo $obs; ?>" autofocus>
          </div>


	   </div>
     </div>

	   <div class="col-md-4 mb-4">
	   <input type="submit" name="update" class="btn btn-primary btn-block" value="Actualizar Agenda">
    
	   </div>
    </form>
   </div>

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


      </script>

<?php include('../includes/footer.php'); ?>
<?php ob_end_flush();?>
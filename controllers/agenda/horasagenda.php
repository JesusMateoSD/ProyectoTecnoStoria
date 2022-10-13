 <?php
  session_start();
  include('../db.php');
  include('../includes/header.php');
 ?>

    <!-- INICIO PHP  -->
    <?php if (isset($_SESSION['message'])) { ?>
    <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
      <?= $_SESSION['message']?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <?php unset($_SESSION["message"]); } ?>
    
      <?php if ($_SESSION['snivel'] == 1 ) { ?>  
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
          <button type="button" style="width: 100%;" class="btn btn-outline-primary" onclick="window.location.href='../agenda/agendaxhora.php'">Agenda Horas</button>
        </div>
        <div class="col-md-4">
          <button type="button" style="width: 100%;" class="btn btn-outline-primary" onclick="window.location.href='../agenda/agendaxmedia.php'">Agenda Media Hora</button>
        </div>
        <div class="col-md-4">
          <button type="button" style="width: 100%;" class="btn btn-outline-primary" onclick="window.location.href='../agenda/agendaxcuarto.php'">Agenda Cuarto Hora</button>
        </div>
        
    </div>

    <br>
      <div class="row">
      <div class="col-md-4">
          <button type="button" style="width: 100%;" class="btn btn-outline-primary" onclick="window.location.href='../agenda/agendaxdiez.php'">Agenda Sexta Hora</button>
        </div>
      </div>
</div>
<?php } ?> 

    <!-- FIN PHP  -->

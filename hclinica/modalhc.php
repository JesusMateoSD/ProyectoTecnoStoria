<?php
  session_start();
  include('../db.php');
  include('../header/header.php');
?>

<main class="container" style="width: 900px; height: 300px; margin-top: 12%;">
  <form action="../hclinica/indexhclinica.php" method="POST" >
    <div class="row text-center">
      <div class="col-md-12 mb-2 text-center">
        <h1>Digite Numero Documento:</h1> 
      </div>
    </div>
    <div class="form-row mb-4">
      <input type="text" name="documento" id="documento" class="form-control text-center">
    </div>
    </div>
    <div class="form-row mb-2 text-center">
      <div class="col-md-12 text-center">        
        <input type="submit" name="salvarparametro" class="btn btn-primary " value="Historia Clinica">            
      </div>
    </div>
  </form>
</main>         
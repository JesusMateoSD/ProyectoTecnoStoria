<?php
  if(isset($_POST['salvarparametro'])){
    $cedula = $_POST['documento'];
    $usuario = new UsuarioControlador();
    $usuario->validarDocumentoPacienteControlador($cedula);
  }

  if(isset($_SESSION['usuario']) && $_SESSION['snivel'] <= 2){
    include("header.php");
  }
  else{
    header('location:index.php');
  }
?>

<main class="container" style="width: 900px; height: 300px; margin-top: 12%;">
  <form method="POST" >
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
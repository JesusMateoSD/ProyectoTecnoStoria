<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TecnoStoria</title>
      <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="../cssjs/style.css" type="text/css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-light mb-3" id="nav">
      <div class="container-fluid my-2">
        <img src="../img/Logo TecnoStoria Page.png" height="30" class="d-inline-block pr-2" alt="">
        <a class="navbar-brand" id="tecnostoria" href="../inicio/inicio.php">TecnoStoria</a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon mt-1">☰</span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active me-3" aria-current="page" href="../inicio/inicio.php">Pagina principal</a>
            </li>

            <?php if ($_SESSION['snivel'] == 1 ) { ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                ADMINISTRADOR
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../consultorios/indexconsultorio.php">Consultorio</a></li>
                <li><a class="dropdown-item" href="../usuarioadm/indexusuario.php">Crear Administrador</a></li>
                <li><a class="dropdown-item" href="../usuarios/indexusuario.php">Crear Usuario</a></li>
                <li><a class="dropdown-item" href="">Crear Tarifa</a></li>
                <li><a class="dropdown-item" href="">Crear CIE10</a></li>
                <li><a class="dropdown-item" href="">Crear CUPS</a></li>
                <li><a class="dropdown-item" href="">Reportes</a></li>
                <li><a class="dropdown-item" href="">Cambiar Clave</a></li>
              </ul>
            </li>
            <?php } ?>

            <?php if ($_SESSION['snivel'] == 1 OR $_SESSION['snivel'] == 2) { ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                MEDICO
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../hclinica/modalhc.php" >Ingreso Historia Clinica</a></li>
                <li><a class="dropdown-item" href="../agenda/indexagenda.php">Agenda</a></li>
              </ul>
            </li>
            <?php } ?>

            <?php if($_SESSION['snivel'] == 1 OR $_SESSION['snivel'] == 2 OR $_SESSION['snivel'] == 3 ){ ?> 
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                ASISTENTE
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../pacientes/indexpaciente.php">Pacientes</a></li>
                <li><a class="dropdown-item" href="../agenda/indexagenda.php">Agenda</a></li>
                <li><a class="dropdown-item" href="">Pagos</a></li>
                <li><a class="dropdown-item" href="">Crear Modelo Consentimiento</a></li>
                <li><a class="dropdown-item" href="">Crear Modelo Recetario</a></li>
                <li><a class="dropdown-item" href="">Cambiar Clave</a></li>
              </ul>
            </li>
            <?php }?>
          </ul>
          <div style="margin-left: 60px;">
            <button class="btn btn-primary" style="cursor:pointer" onclick="openNav()">&#9776; Usuario: <?php echo $_SESSION['snombre'];?></button>
          </div>
          
          <div id="mySidenav" class="sidenav">
            <h2> <?php 
              if($_SESSION['snivel'] == 1){
                echo " Administrador ";
              }else if($_SESSION['snivel'] == 2){
                echo "Medico";
              }else if($_SESSION['snivel'] == 3){
                echo "Asistente";
              } ?></h2>
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="../logout.php">Cerrar sesion</a>
          </div>
        </div>
      </div>
    </nav>
  </body>

  <script src="../cssjs/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>  
</html>


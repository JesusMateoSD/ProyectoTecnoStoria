
    <nav class="navbar navbar-expand-lg bg-light mb-3" id="nav">
      <div class="container-fluid my-2">
        <img src="views/img/LogoTecnoStoriaPage.png" height="30" class="d-inline-block pr-2" alt="">
        <a class="navbar-brand" id="tecnostoria" href="index.php?action=inicio">TecnoStoria</a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon mt-1">☰</span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active me-3" aria-current="page" href="index.php?action=inicio">Pagina principal</a>
            </li>

            <?php if ($_SESSION['snivel'] == 1 ) { ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                ADMINISTRADOR
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="index.php?action=consultorio">Consultorio</a></li>
                <li><a class="dropdown-item" href="index.php?action=usuarioadm">Crear Administrador</a></li>
                <li><a class="dropdown-item" href="index.php?action=usuario">Crear Usuario</a></li>
                <li><a class="dropdown-item" href="index.php?action=tarifa">Crear Tarifa</a></li>
                <li><a class="dropdown-item" href="index.php?action=cie10">Crear CIE10</a></li>
                <li><a class="dropdown-item" href="index.php?action=cups">Crear CUPS</a></li>
                <li><a class="dropdown-item" href="index.php?action=reportes">Reportes</a></li>
                <li><a class="dropdown-item" href="index.php?action=usuariocc">Cambiar Clave</a></li>
              </ul>
            </li>
            <?php } ?>
          
            <?php if ($_SESSION['snivel'] == 1 OR $_SESSION['snivel'] == 2) { ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                MEDICO
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="index.php?action=modalhc" >Ingreso Historia Clinica</a></li>
                <li><a class="dropdown-item" href="index.php?action=agenda">Agenda</a></li>
                <li><a class="dropdown-item" href="index.php?action=usuariocc">Cambiar Clave</a></li>
              </ul>
            </li>
            <?php } ?>

            <?php if($_SESSION['snivel'] == 1 OR $_SESSION['snivel'] == 2 OR $_SESSION['snivel'] == 3 ){ ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                ASISTENTE
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="index.php?action=paciente">Pacientes</a></li>
                <li><a class="dropdown-item" href="index.php?action=agenda">Agenda</a></li>
                <li><a class="dropdown-item" href="index.php?action=pagos">Pagos</a></li>
                <li><a class="dropdown-item" href="index.php?action=modeloc">Crear Modelo Consentimiento</a></li>
                <li><a class="dropdown-item" href="index.php?action=modelorec">Crear Modelo Recetario</a></li>
                <li><a class="dropdown-item" href="index.php?action=usuariocc">Cambiar Clave</a></li>
              </ul>
            </li>
            <?php } ?>
            
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
            <a href="index.php?action=logout">Cerrar sesion</a>
          </div>
        </div>
      </div>
    </nav>



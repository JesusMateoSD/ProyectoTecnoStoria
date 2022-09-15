<nav class="navbar navbar-expand-lg bg-light" id="nav">
    <div class="container-fluid">

        <!-- 
          <ul class="nav navbar-nav">
            <a class="nav-item nav=link active" href="#">Administrador </a>
            <a class="nav-item nav=link" href="#">Inicio</a>
            <a class="nav-item nav=link" href="#">Citas</a>
            <a class="nav-item nav=link" href="#">Agendas</a>
            <a class="nav-item nav=link" href="#">Personal de Salud</a>
            <a class="nav-item nav=link" href="#">Asistente</a>
            <a class="nav-item nav=link" href="#">Historias Clinicas</a>
            <a class="nav-item nav=link" href="#">Pagos Citas</a>
            <a class="nav-item nav=link" href="#">Facturas</a>
            <a class="nav-item nav=link" href="#">EPS</a>
            <a class="nav-item nav=link" href="#">Plan de Salud</a>
            <a class="nav-item nav=link" href="#">Usuarios</a>
         -->
        <img src="../resources/img/Logo TecnoStoria Page.png" height="30" class="d-inline-block me-3" alt="">
        <a class="navbar-brand" id="tecnostoria" href="../usuario/index.php">TecnoStoria</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active me-3" aria-current="page" href="../usuario/index.php">Pagina principal</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Menu de Asistente
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../paciente/frmpaciente.php">Pacientes</a></li>
                <li><a class="dropdown-item" href="../cita/frmcita.php">Citas Medicas</a></li>
                <li><a class="dropdown-item" href="../agenda/frmagenda.php">Agendas</a></li>
              </ul>
            </li>

            <li class="nav-item dropdown mx-2">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Menu de Personal de Salud
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../cita/consultarcita.php">Consultar pacientes</a></li>
                <li><a class="dropdown-item" href="#">Historias Clinicas | Medicas</a></li>
                <li><a class="dropdown-item" href="#">Facturas</a></li>
              </ul>
            </li>
        </ul>

        <div>
            <button class="btn btn-primary" style="cursor:pointer" onclick="openNav()">&#9776; Usuario: Jesus Mateo</button>
        </div>
        
        <div id="mySidenav" class="sidenav">
            <h2> -- Asistente -- </h2>
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#">Perfil de usuario</a>
            <a href="#">Configuracion de usuario</a>
            <a href="../usuario/login.php">Cerrar sesion</a>
        </div>
        </div>
    </div>
</nav>
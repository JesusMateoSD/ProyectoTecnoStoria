<nav class="navbar navbar-expand-lg bg-light" id="nav">
    <div class="container-fluid">
        <img src="resources/img/Logo TecnoStoria Page.png" height="30" class="d-inline-block me-3" alt="">
        <a class="navbar-brand" id="tecnostoria" href="principal.php">TecnoStoria</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active me-3" aria-current="page" href="index.php">Pagina principal</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Menu de paciente
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="frmcita.php">Crear paciente</a></li>
                    <li><a class="dropdown-item" href="#">Consultar paciente</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Editar paciente</a></li>
                    <li><a class="dropdown-item" href="#">Borrar paciente</a></li>
                </ul>
            </li>
        </ul>

        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Menu de citas medica
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Crear citas medica</a></li>
                <li><a class="dropdown-item" href="#">Consultar citas medica</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Editar citas medica</a></li>
                <li><a class="dropdown-item" href="#">Borrar citas medica</a></li>
            </ul>
            </li>
        </ul>

        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Menu de agenda
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Crear agenda</a></li>
                <li><a class="dropdown-item" href="#">Consultar agenda</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Editar agenda</a></li>
                <li><a class="dropdown-item" href="#">Borrar agenda</a></li>
            </ul>
            </li>
        </ul>

        <!-- <button class="btn btn-success me-3">Crear su propia cita medica</button> -->

        <div>
            <button class="btn btn-primary" style="cursor:pointer" onclick="openNav()">&#9776; Usuario: Jesus Mateo</button>
        </div>
        
        <div id="mySidenav" class="sidenav">
            <h2> -- Asistente -- </h2>
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#">Perfil de usuario</a>
            <a href="#">Configuracion de usuario</a>
            <a href="#">Cerrar sesion</a>
        </div>
        </div>
    </div>
</nav>
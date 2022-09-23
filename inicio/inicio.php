<?php
  session_start();
  include('../db.php');
  include("../header/header.php");
?>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <body>
    <main>
      <div class="container">
        <div class="row">
          <div class="clearfix" style="margin: 5% 5% 5% 0%; padding: 10% 0% 10% 0%">
            <img src="../resources/img/Logo TecnoStoria Page.png" class="col-md-6 float-md-end mb-3 ms-md-3 img-fluid">
            <h2>Bienvenido a la pagina inicial de la pagina web TecnoStoria</h2>
            <br>
            <p>
              Esta pagina fue disenada para que tanto la persona que quiera acudir a generar una cita como el personal de salud que trabaja tenga la oportunidad de que puedan trabajar en conjunto sin tener algun problema con el tiempo de atencion y trabajo.
            </p>
            <br>
            <h2>
              El nombre del usuario registrado es: <?php echo $_SESSION['snombre'];?>, con rol de: <?php 
                if($_SESSION['snivel'] == 1){
                  echo "Administrador";
                } else if($_SESSION['snivel'] == 2){
                  echo "Personal de Salud";
                } else if($_SESSION['snivel'] == 3){
                  echo "Asistente";
                }
                ?>
            </h2>
          </div>  
        </div>
      </div>
    </main>
  </body>
</html>
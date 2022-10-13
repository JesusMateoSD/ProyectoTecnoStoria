<?php

class EnlacesPaginacionControlador{

  public function mostrarPagina(){
    include('views/template.php');
  }

  public function cargarPaginaTemplate(){
    if(!isset($_GET['action'])){
      $enlace = 'login';
    }
    else{
      $enlace = $_GET['action'];
    }

    $enlacePaginacionModelo = new EnlacesPaginacionModelo();
    $ruta = $enlacePaginacionModelo->verficarEnlacePagina($enlace);
    if($ruta == "Error"){
      $ruta = "views/modules/error.php";
    }
    include($ruta);
  }
  
}

?>
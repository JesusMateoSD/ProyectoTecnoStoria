<?php

class EnlacesPaginacionModelo{
  public function verficarEnlacePagina($enlace){
    $modulo = "views/modules/".$enlace.".php";
    if(!file_exists($modulo)){
      if($enlace == 'usuok'){
        $modulo = 'views/modules/usuario.php';
      }
      if($enlace == 'usuadmok'){
        $modulo = 'views/modules/usuarioadm.php';
      }
    }
      
    if(isset($_GET['action']) && $_GET['action'] == 'err'){
      header('location:index.php?action=login&err=err');
    } else if(isset($_GET['action']) && $_GET['action'] == 'delUser'){
      header('location:index.php?action=eliminarUsuario&id='.$_GET['id']);
    } else if(isset($_GET['action']) && $_GET['action'] == 'delUserAdm'){
      header('location:index.php?action=eliminarUsuarioadm&id='.$_GET['id']);
    } else if(isset($_GET['action']) && $_GET['action'] == 'delCons'){
      header('location:index.php?action=eliminarConsultorio&id='.$_GET['id']);
    } else if(isset($_GET['action']) && $_GET['action'] == 'editCon'){
      header('location:index.php?action=editconsultorio&id='.$_GET['id']);
    } else if($_GET['res'] == 'ok'){
      header('location:index.php?action=ok');
    }
    return $modulo;
  }
}

?>
<?php

class EnlacesPaginacionModelo{
  public function verficarEnlacePagina($enlace){
    $modulo = "views/modules/".$enlace.".php";
    $conteo = 0;
    if(!file_exists($modulo)){
      if($enlace == 'usuok'){
        $modulo = 'views/modules/usuario.php';
      }
      if($enlace == 'usuadmok'){
        $modulo = 'views/modules/usuarioadm.php';
      }
      if($enlace == 'con' || $enlace == 'conAct'){
        $modulo = 'views/modules/consultorio.php';
      }
    }
      
    if(isset($_GET['action']) && $_GET['action'] == 'err'){
      header('location:index.php?action=login&err=err');
    } 
    
    if(isset($_GET['action']) && $_GET['action'] == 'delUser'){
      header('location:index.php?action=eliminarUsuario&id='.$_GET['id']);
    } else if(isset($_GET['action']) && $_GET['action'] == 'delUserAdm'){
      header('location:index.php?action=eliminarUsuarioadm&id='.$_GET['id']);
    } else if(isset($_GET['action']) && $_GET['action'] == 'delCons'){
      header('location:index.php?action=eliminarConsultorio&id='.$_GET['id']);
    } 
    
    if(isset($_GET['action']) && $_GET['action'] == 'editCon'){
      header('location:index.php?action=editconsultorio&id='.$_GET['id']);
    } 
    
    if($_GET['res'] == 'ok'){
      header('location:index.php?action=ok');
    }
    return $modulo;
  }
}

?>
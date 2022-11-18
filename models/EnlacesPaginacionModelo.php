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

      if($enlace == 'conok' || $enlace == 'conAct'){
        $modulo = 'views/modules/consultorio.php';
      }

      if($enlace == 'ageok' || $enlace == 'ageAct'){
        $modulo = 'views/modules/agenda.php';
      }

      if($enlace == 'pacok'){
        $modulo = 'views/modules/paciente.php';
      }

      if($enlace == 'hcok'){
        $modulo = 'views/modules/hclinica.php';
      }

      if($enlace == 'emok'){
        $modulo = 'views/modules/evolucion.php';
      }

      if($enlace == 'receok'){
        $modulo = 'views/modules/recetario.php';
      }

      if($enlace == 'certeok'){
        $modulo = 'views/modules/certificacion.php';
      }

      if($enlace == 'omok'){
        $modulo = 'views/modules/omedicas.php';
      }

      if($enlace == 'remok'){
        $modulo = 'views/modules/remision.php';
      }

      if($enlace == 'ciok'){
        $modulo = 'views/modules/cinformados.php';
      }

      if($enlace == 'usuccok'){
        $modulo = 'views/modules/usuariocc.php';
      }

      if($enlace == 'tarok'){
        $modulo = 'views/modules/tarifa.php';
      }

      if($enlace == 'cie10ok'){
        $modulo = 'views/modules/cie10.php';
      }

      if($enlace == 'cupsok'){
        $modulo = 'views/modules/cups.php';
      }

      if($enlace == 'modrok'){
        $modulo = 'views/modules/modelorec.php';
      }

      if($enlace == 'modcok'){
        $modulo = 'views/modules/modeloc.php';
      }

      if($enlace == 'pagok'){
        $modulo = 'views/modules/pagos.php';
      }
    }
      
    if(isset($_GET['action']) && $_GET['action'] == 'err'){
      header('location:index.php?action=login&err=err&int='.$_GET['int']);
    } 
    
    if(isset($_GET['action']) && $_GET['action'] == 'delUser'){
      header('location:index.php?action=eliminarUsuario&id='.$_GET['id']);
    } else if(isset($_GET['action']) && $_GET['action'] == 'delUserAdm'){
      header('location:index.php?action=eliminarUsuarioadm&id='.$_GET['id']);
    } else if(isset($_GET['action']) && $_GET['action'] == 'delCons'){
      header('location:index.php?action=eliminarConsultorio&id='.$_GET['id']);
    } else if(isset($_GET['action']) && $_GET['action'] == 'delCita'){
      header('location:index.php?action=eliminarCita&id='.$_GET['id']);
    } else if(isset($_GET['action']) && $_GET['action'] == 'delPac'){
      header('location:index.php?action=eliminarPaciente&id='.$_GET['id']);
    } else if(isset($_GET['action']) && $_GET['action'] == 'delHC'){
      header('location:index.php?action=eliminarHC&id='.$_GET['id']);
    } else if(isset($_GET['action']) && $_GET['action'] == 'delEM'){
      header('location:index.php?action=eliminarEM&id='.$_GET['id']);
    } else if(isset($_GET['action']) && $_GET['action'] == 'delRece'){
      header('location:index.php?action=eliminarRecetario&id='.$_GET['id']);
    } else if(isset($_GET['action']) && $_GET['action'] == 'delCert'){
      header('location:index.php?action=eliminarCertificacion&id='.$_GET['id']);
    } else if(isset($_GET['action']) && $_GET['action'] == 'delOM'){
      header('location:index.php?action=eliminarOM&id='.$_GET['id']);
    } else if(isset($_GET['action']) && $_GET['action'] == 'delRemision'){
      header('location:index.php?action=eliminarRemision&id='.$_GET['id']);
    } else if(isset($_GET['action']) && $_GET['action'] == 'delCI'){
      header('location:index.php?action=eliminarCI&id='.$_GET['id']);
    } else if(isset($_GET['action']) && $_GET['action'] == 'delTar'){
      header('location:index.php?action=eliminarTarifa&id='.$_GET['id']);
    } else if(isset($_GET['action']) && $_GET['action'] == 'delCIE'){
      header('location:index.php?action=eliminarCIE10&id='.$_GET['id']);
    } else if(isset($_GET['action']) && $_GET['action'] == 'delCUPS'){
      header('location:index.php?action=eliminarCUPS&id='.$_GET['id']);
    } else if(isset($_GET['action']) && $_GET['action'] == 'delModR'){
      header('location:index.php?action=eliminarModeloR&id='.$_GET['id']);
    } else if(isset($_GET['action']) && $_GET['action'] == 'delModC'){
      header('location:index.php?action=eliminarModeloC&id='.$_GET['id']);
    } else if(isset($_GET['action']) && $_GET['action'] == 'delPagT'){
      header('location:index.php?action=eliminarPagoTemp&id='.$_GET['id']);
    } 
    

    if(isset($_GET['action']) && $_GET['action'] == 'editCon'){
      header('location:index.php?action=editconsultorio&id='.$_GET['id']);
    } else if(isset($_GET['action']) && $_GET['action'] == 'editAge'){
      header('location:index.php?action=editpagenda&id='.$_GET['id']);
    } else if(isset($_GET['action']) && $_GET['action'] == 'editUsu'){
      header('location:index.php?action=editusuariocc&id='.$_GET['id']);
    } 

    if(isset($_GET['action']) && $_GET['action'] == 'indexhclinicaAge'){
      if(isset($_GET['idp']) && !empty($_GET['idp'])){
        header('location:index.php?action=validarHC&id='.$_GET['idp']);
      }
      $modulo = 'views/modules/agenda.php';
    }
    
    if($_GET['res'] == 'ok'){
      header('location:index.php?action=ok');
    }
    return $modulo;
  }
}

?>
<?php
  error_reporting(E_ERROR | E_PARSE);
  class HClinicaControlador{
    // public function validarDocumentoHCControlador(){
    //   if(isset($_POST['salvarparametro'])){
    //     $_SESSION['scedulap'] = 0;
    //     $_SESSION['scedula'] = $_POST['documento'];

    //     $usuario = new HClinicaModelo();
    //     $respuesta = $usuario->validarDocumentoHCModelo($_SESSION['scedula']);
    //   }
    // }
    public function TablaCausasExternasControlador(){
      $HClinica = new HClinicaModelo();
      $respuesta = $HClinica->TablaCausasExternasControlador();
      return $respuesta;
    }

    public function TablaFinalidadConsultasControlador(){
      $HClinica = new HClinicaModelo();
      $respuesta = $HClinica->TablaFinalidadConsultasModelo();
      return $respuesta;
    }

    public function TablaHClinicaControlador(){
      $HClinica = new HClinicaModelo();
      $respuesta = $HClinica->TablaHClinicaModelo();
      return $respuesta;
    }

    public function TablaHClinicaIndControlador($id){
      $HClinica = new HClinicaModelo();
      $respuesta = $HClinica->TablaHClinicaIndModelo($id);
      return $respuesta;
    }

    public function borrarHCControlador($id){
      if(isset($id)){
        $HClinica = new HClinicaModelo();
        $respuesta = $HClinica->borrarHCModelo($id);
      }
    }

    public function registrarHistoriaClinicaControlador(){
      if(isset($_POST['salvarhistoria'])){
        $datosHC = ['fecha' => $_POST['fecha'],
        'hora' => $_POST['hora'],
        'td' => $_POST['td'],
        'paciente' => $_POST['paciente'],
        'documento' => $_POST['documento'],
        'dir' => $_POST['dir'],
        'tel' => $_POST['tel'],
        'edad' => $_POST['edad'],
        'fechan' => $_POST['fechan'],
        'causaexterna' => $_POST['causaexterna'],
        'finalidadconsulta' => $_POST['finalidadconsulta'],
        'mconsulta' => $_POST['mconsulta'],
        'eactual' => $_POST['eactual'],
        'rsistema' => $_POST['rsistema'],
        'uanti' => $_POST['uanti'],
        'menarquia' => $_POST['menarquia'],
        'fum' => $_POST['fum'],
        'g' => $_POST['g'],
        'a' => $_POST['a'],
        'p' => $_POST['p'],
        'c' => $_POST['c'],
        'fuparto' => $_POST['fuparto'],
        'cv' => $_POST['cv'],
        'pulm' => $_POST['pulm'],
        'dige' => $_POST['dige'],
        'diab' => $_POST['diab'],
        'rnl' => $_POST['rnl'],
        'quirur' => $_POST['quirur'],
        'traum' => $_POST['traum'],
        'aler' => $_POST['aler'],
        'trfs' => $_POST['trfs'],
        'mdcm' => $_POST['mdcm'],
        'alc' => $_POST['alc'],
        'drogas' => $_POST['drogas'],
        'ciga' => $_POST['ciga'],
        'inm' => $_POST['inm'],
        'otros' => $_POST['otros'],
        'afm' => $_POST['afm'],
        'cabeza' => $_POST['cabeza'],
        'cara' => $_POST['cara'],
        'cuello' => $_POST['cuello'],
        'torax' => $_POST['torax'],
        'corazon' => $_POST['corazon'],
        'pulmones' => $_POST['pulmones'],
        'abdpelvis' => $_POST['abdpelvis'],
        'genext' => $_POST['genext'],
        'colver' => $_POST['colver'],
        'neurologico' => $_POST['neurologico'],
        'miemsup' => $_POST['miemsup'],
        'mieminf' => $_POST['mieminf'],
        'pifan' => $_POST['pifan'],
        'articu' => $_POST['articu'],
        'fuermus' => $_POST['fuermus'],
        'reflejos' => $_POST['reflejos'],
        'parescraneales' => $_POST['parescraneales'],
        'psicoemocional' => $_POST['psicoemocional'],
        'fc' => $_POST['fc'],
        'fr' => $_POST['fr'],
        'ta' => $_POST['ta'],
        't' => $_POST['t'],
        'so2' => $_POST['so2'],
        'pesokg' => $_POST['pesokg'],
        'tallacm' => $_POST['tallacm'],
        'imc' => $_POST['imc'],
        'lectura' => $_POST['lectura'],
        'imd' => $_POST['imd'],
        'conds' => $_POST['conds'],
        'incap' => $_POST['incap'],
        'usuario' => $_SESSION['snombre'],
        'docusuario' => $_SESSION['sdocumento']];

        $HClinica = new HClinicaModelo();
        $respuesta = $HClinica->registrarHistoriaClinicaModelo($datosHC);

        if($respuesta == 'success'){
          header('location:index.php?action=hcok');
        } else if($respuesta == 'error'){
          header('location:index.php?action=hclinica');
        }
      }
    }
  }
?>
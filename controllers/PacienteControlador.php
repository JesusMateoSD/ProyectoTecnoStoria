<?php
  error_reporting(E_ERROR | E_PARSE);
  class PacienteControlador{
    public function consultarPacienteAgendaControlador($documento){
      $paciente = new PacienteModelo();
      $respuesta = $paciente->consultarPacienteAgendaModelo($documento);
      return $respuesta;
    }

    public function tipoDocumentoControlador(){
      $paciente = new PacienteModelo();
      $respuesta = $paciente->tipoDocumentoModelo();
      return $respuesta;
    }

    public function DepartamentosPacienteControlador(){
      $paciente = new PacienteModelo();
      $respuesta = $paciente->DepartamentosPacienteModelo();
      return $respuesta;
    }

    public function TablaPacientesControlador(){
      $paciente = new PacienteModelo();
      $respuesta = $paciente->TablaPacientesModelo();
      return $respuesta;
    }

    public function registrarPacienteControlador($usuario,$docusuario){
      if(isset($_POST['salvarpaciente'])){
        $datosPaciente = [
        'paciente' => $_POST['paciente'],
        'tipodocumento' => $_POST['tipodocumento'],
        'documento' => $_POST['documento'],
        'fecha' => $_POST['fecha'],
        'fechan' => $_POST['fechan'],
        'edad' => $_POST['edad'],
        'sexo' => $_POST['sexo'],
        'dir' => $_POST['dir'],
        'telefono' => $_POST['telefono'],
        'correo' => $_POST['correo'],
        'ocupacion' => $_POST['ocupacion'],
        'eps' => $_POST['eps'],
        'dpto' => $_POST['dpto'],
        'municipio' => $_POST['municipio'],
        'acudiente' => $_POST['acudiente'],
        'direcciona' => $_POST['direcciona'],
        'telefonoa' => $_POST['telefonoa'],
        'usuario' => $usuario,
        'docusuario' => $docusuario];

        $paciente = new PacienteModelo();
        $respuesta = $paciente->registrarPacienteModelo($datosPaciente);

        if($respuesta == 'success'){
          header('location:index.php?action=pacok');
        } else if($respuesta == 'error'){
          header('location:index.php?action=paciente');
        }
      }
    }

    public function MunicipiosPacienteControlador($dpto){
      $paciente = new PacienteModelo();
      $respuesta = $paciente->MunicipiosPacienteModelo($dpto);
      return $respuesta;
    }

    public function borrarPacienteControlador($id){
      if(isset($id)){
        $paciente = new PacienteModelo();
        $respuesta = $paciente->borrarPacienteModelo($id);
      }
    }
  }
?>
<?php
  error_reporting(E_ERROR | E_PARSE);
  class AgendaControlador{
    public function tablaAgenProControlador(){
      $agenda = new AgendaModelo();
      $respuesta = $agenda->tablaAgenProModelo();
      return $respuesta;
    }

    public function tablaHorasControlador(){
      $agenda = new AgendaModelo();
      $respuesta = $agenda->tablaHorasModelo();
      return $respuesta;
    }

    public function UnionAgendaControlador($fechahoy){
      $agenda = new AgendaModelo();
      $respuesta = $agenda->UnionAgendaModelo($fechahoy);
      return $respuesta;
    }

    public function LimpiarAgendaPControlador(){
      $agenda = new AgendaModelo();
      $respuesta = $agenda->LimpiarAgendaPModelo();
    }

    public function InsertarFechaAgendaPControlador($Cita){
      $agenda = new AgendaModelo();
      $respuesta = $agenda->InsertarFechaAgendaPModelo($Cita);
    }

    public function TablaAgendaControlador(){
      $agenda = new AgendaModelo();
      $respuesta = $agenda->TablaAgendaModelo();
      return $respuesta;
    }

    public function RegistrarCitaControlador(){
      if(isset($_POST['salvaragenda'])){
        $datosCita = [
        'docp' => $_POST['docp'],
        'profesional' => $_POST['profesional'],
        'fecha' => $_POST['fecha'],
        'hora' => $_POST['hora'],
        'cedula' => $_POST['cedula'],
        'paciente' => $_POST['paciente'],
        'telefono' => $_POST['telefono'],
        'nivel' => $_POST['nivel'],
        'obs' => $_POST['obs']];

        $agenda = new AgendaModelo();
        $respuesta = $agenda->registrarAgendaModelo($datosCita);
        
        if($respuesta == 'success'){
          header('location:index.php?action=ageok');
        } else{
          header('location:index.php?action=agenda');
        }
      }
    }

    public function borrarCitaControlador($id){
      if(isset($id)){
        $agenda = new AgendaModelo();
        $respuesta = $agenda->borrarCitaModelo($id);
      }
    }

     public function consultarCitaAgendaControlador($id){
      $agenda = new AgendaModelo();
      $respuesta = $agenda->consultarCitaAgendaModelo($id);
      return $respuesta;
    }

    public function editarAgendaControlador($id){
      if(isset($_POST['update'])){
        $datosAgenda = ['id' => $id,
        'profesional' => $_POST['profesional'],
        'docp' => $_POST['docp'],
        'fecha' => $_POST['fecha'],
        'hora' => $_POST['hora'],
        'cedula' => $_POST['cedula'],
        'paciente' => $_POST['paciente'],
        'telefono' => $_POST['telefono'],
        'nivel' => $_POST['nivel'],
        'obs' => $_POST['obs']];

        $agenda = new AgendaModelo();
        $respuesta = $agenda->editarAgendaModelo($datosAgenda);

        if($respuesta == 'success'){
          header('location:index.php?action=ageAct');
        }else if($respuesta == 'error'){
          header('location:index.php?action=editpagenda');
        }
      }
    }
  }
?>
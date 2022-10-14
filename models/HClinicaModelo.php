<?php
  include_once('db.php');

  class HClinicaModelo extends Conexion{
    public function validarDocumentoHCModelo($Doc){

      $sql = "SELECT * FROM tbl_pacientes WHERE documento=:cedula";
      try {
        $conexion = new Conexion();
        $stmt = $conexion->conectar()->prepare($sql);
        $stmt->bindParam(':cedula', $Doc,PDO::PARAM_STR);

        $stmt->execute();
        if($stmt->rowCount() == 1){
          $resulsql = $stmt->fetch();
          $_SESSION['activa'] = true;
          $_SESSION['scorreo'] = $resulsql['correo'];
          $_SESSION['sclave'] = $resulsql['pass'];
          $_SESSION['snombre'] = $resulsql['nombre'];
          $_SESSION['snivel'] = $resulsql['nivel'];
          $_SESSION['sregistro'] = $resulsql['registro'];

          $correo1 = $resulsql['correo'];
          $clave1 = $resulsql['clave'];
          $hash = $clave1;

          if (password_verify($clave, $hash)) {   
            return 'success';      
          } else{
            return 'error';
          }
        } else{
          return 'error';
        }
      } catch (Exception $e) {
        return $e;
      }

  // if (empty($_SESSION['scedulap'])){

  //   $nombrep = $row["paciente"];

  //   if (mysqli_num_rows($result) == 0) {
  //     echo  '<script LANGUAGE="javascript">
  //             $(document).ready(function() {
  //               swal({
  //                 title: "TecnoStoria!",
  //                 text: "Paciente No Existe Debe Crearlo Primero Para Hacer Historia Clinica!",
  //                 type: "error",
  //                 confirmButtonColor: "#3085d6",
  //                 confirmButtonText: "OK!"
  //               }).then((result) => {
  //                 if (result.value) {
  //                   window.location.href = "../pacientes/indexpaciente.php";
  //                 }
  //               })
  //             });
  //           </script>';
  //   } 
  // } else{
      
  //   $query = "SELECT * FROM tbl_pacientes WHERE documento='$_SESSION[scedulap]'";
  //   $result = mysqli_query($mysqli, $query);

  //   $row = mysqli_fetch_array($result);
  //   $nombrep = $row["paciente"];
  //   if (mysqli_num_rows($result) == 0) {
  //     echo  '<script LANGUAGE="javascript">
  //             $(document).ready(function() {
  //               swal({
  //                 title: "TecnoStoria!",
  //                 text: "Paciente No Existe Debe Crearlo Primero Para Hacer Historia Clinica!",
  //                 type: "error",
  //                 confirmButtonColor: "#3085d6",
  //                 confirmButtonText: "OK!"
  //               }).then((result) => {
  //                 if (result.value) {
  //                   window.location.href = "../pacientes/indexpaciente.php";
  //                 }
  //               })
  //             });
  //           </script>';
  //   }
  // }
    }
  }
?>
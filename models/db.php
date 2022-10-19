<?php

    class Conexion{
     public function conectar() {
      try {
        $contrasena = "79057182";
        $usuario = "root";
        $nombre_base_de_datos = "bd_tecnostoria";
        $bd = new PDO('mysql:host=localhost;dbname=' . $nombre_base_de_datos, $usuario, $contrasena);
        $bd->query("set names utf8;");
        return $bd;
       } catch(Exception $e){
        print_r($e->getMessage());
       }
     }
    }

?>

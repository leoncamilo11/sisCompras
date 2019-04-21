<?php
  /**
   *
   */
  class ConsultaUsuariosModelo extends Conexion
  {

    function consultarUsuariosModelo($rol)
    {
      if ($rol == null) {
        $c_bd = Conexion::conectar()->prepare("SELECT *
                                                FROM vusuarios
                                                ORDER BY IdUsuario");
      } else {
        $c_bd = Conexion::conectar()->prepare("SELECT *
                                                FROM vusuarios
                                                WHERE IdRol = $rol
                                                ORDER BY IdUsuario");
      }
      $c_bd -> execute();
      return $c_bd -> fetchAll();
      $c_bd -> close();
    }
  }
 ?>

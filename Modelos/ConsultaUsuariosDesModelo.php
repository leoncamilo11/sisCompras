<?php
  /**
   *
   */
  class ConsultaUsuariosDesModelo extends Conexion
  {

    public function consultarUsuariosDesModelo($rol)
    {
      if ($rol == null) {
        $c_bd = Conexion::conectar() -> prepare("SELECT *
                                                  FROM vUsuariosInactivos
                                                  ORDER BY IdUsuario");
      } else {
        $c_bd = Conexion::conectar() -> prepare("SELECT *
                                                  FROM vUsuariosInactivos
                                                  WHERE IdRol = $rol
                                                  ORDER BY IdUsuario");
      }
      $c_bd -> execute();
      return $c_bd -> fetchAll();
      $c_bd -> close();
    }
  }

 ?>

<?php
  /**
   *
   */
  class ActivaUsuariosModelo extends Conexion
  {

    public function activarUsuariosModelo($codigoUsuario)
    {
      $c_bd = Conexion::conectar() -> prepare("CALL ActivarUsuarios(:CodigoUsuario)");
      $c_bd -> BindParam(":CodigoUsuario", $codigoUsuario, PDO::PARAM_STR);
      $c_bd -> execute();
      $mensaje = $c_bd -> fetchColumn();
      return $mensaje;
      $c_bd -> close();
    }
  }

 ?>

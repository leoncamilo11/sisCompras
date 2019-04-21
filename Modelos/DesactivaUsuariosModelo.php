<?php
  /**
   *
   */
  class DesactivaUsuarioModelo extends Conexion
  {

    public function desactivarUsuariosModelo($codigoUsuario)
    {
      $c_bd = Conexion::conectar() -> prepare("CALL DesactivarUsuarios(:Identificacion)");
      $c_bd -> bindParam(":Identificacion", $codigoUsuario, PDO::PARAM_STR);
      $c_bd -> execute();
      $mensaje = $c_bd -> fetchColumn();
      return $mensaje;
      $c_bd -> close();
    }
  }

 ?>

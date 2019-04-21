<?php
  /**
   *
   */
  class ActualizaUsuariosModelo extends Conexion
  {

    public function actualizarUsuariosModelo($datosUsuario, $codigoUsuario)
    {
      $c_bd = Conexion::conectar() -> prepare("CALL ActualizarUsuarios(:CodigoUsuario, :Identificacion, :Nombre, :Apellido, :Email, :Clave, :IdRol, :IdProyecto)");
      $c_bd -> bindParam(":CodigoUsuario", $codigoUsuario, PDO::PARAM_INT);
      $c_bd -> bindParam(":Identificacion", $datosUsuario["Identificacion"], PDO::PARAM_STR);
      $c_bd -> bindParam(":Nombre", $datosUsuario["Nombre"], PDO::PARAM_STR);
      $c_bd -> bindParam(":Apellido", $datosUsuario["Apellido"], PDO::PARAM_STR);
      $c_bd -> bindParam(":Email", $datosUsuario["Email"], PDO::PARAM_STR);
      $c_bd -> bindParam(":Clave", $datosUsuario["Clave"], PDO::PARAM_STR);
      $c_bd -> bindParam(":IdRol", $datosUsuario["IdRol"], PDO::PARAM_INT);
      $c_bd -> bindParam(":IdProyecto", $datosUsuario["IdProyecto"], PDO::PARAM_INT);
      $c_bd -> execute();
      $mensaje = $c_bd -> fetchColumn();
      return $mensaje;
      $c_bd -> close();
    }

    public function consultarUsuariosModelo($codigoUsuario)
    {
      $c_bd = Conexion::conectar() -> prepare("SELECT *
                                                FROM vusuarios
                                                WHERE IdUsuario = $codigoUsuario");
      $c_bd -> execute();
      return $c_bd -> fetchAll();
      $c_bd -> close();
    }
  }

 ?>

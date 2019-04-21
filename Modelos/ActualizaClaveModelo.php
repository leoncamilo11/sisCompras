<?php
  /**
   *
   */
  class ActualizaClaveModelo extends Conexion
  {

    public function actualizarClaveModelo($credenciales)
    {
      $c_bd = Conexion::conectar() -> prepare("UPDATE usuario
                                                SET clave = :clave
                                                WHERE email = :email");
      $c_bd -> bindParam(":clave", $credenciales["clave"], PDO::PARAM_STR);
      $c_bd -> bindParam(":email", $credenciales["email"], PDO::PARAM_STR);
      if ($c_bd -> execute()) {
        return "actualizado";
      } else {
        return "error";
      }
      $c_bd -> close();
    }
  }

 ?>

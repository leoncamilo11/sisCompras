<?php
  /**
   *
   */
  class RegistroUsuariosModelo extends Conexion
  {

    public function registrarUsuariosModelo($datosRegistro)
    {
      $c_bd = Conexion::conectar()->prepare("CALL InsertUsers(:Identificacion, :Nombre, :Apellido, :Email, :Clave, :IdRol, :IdProyecto)");
      $c_bd -> bindParam(":Identificacion", $datosRegistro["Identificacion"], PDO::PARAM_STR);
      $c_bd -> bindParam(":Nombre", $datosRegistro["Nombre"], PDO::PARAM_STR);
      $c_bd -> bindParam(":Apellido", $datosRegistro["Apellido"], PDO::PARAM_STR);
      $c_bd -> bindParam(":Email", $datosRegistro["Email"], PDO::PARAM_STR);
      $c_bd -> bindParam(":Clave", $datosRegistro["Clave"], PDO::PARAM_STR);
      $c_bd -> bindParam(":IdRolPk", $datosRegistro["IdRol"], PDO::PARAM_STR);
      $c_bd -> bindParam(":IdProyectoPk", $datosRegistro["IdProyecto"], PDO::PARAM_STR);
      $c_bd -> execute();
      $mensaje = $c_bd -> fetchColumn();
      return $mensaje;
      $c_bd -> close();
    }
  }

 ?>

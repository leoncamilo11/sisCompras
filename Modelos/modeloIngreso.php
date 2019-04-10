<?php
  /**
   *
   */
  class ModeloIngreso extends Conexion
  {

    public function ModeloIngresar($datosControlador)
    {
      $c_bd = Conexion::conectar() -> prepare("SELECT *
                                                  FROM vlogin
                                                  WHERE Email = :email
                                                  AND Clave = :clave");
      $c_bd -> bindParam(":email", $datosControlador["email"], PDO::PARAM_STR);
      $c_bd -> bindParam(":clave", $datosControlador["clave"], PDO::PARAM_STR);
      $c_bd -> execute();
      return $c_bd -> fetch();
      $c_bd -> close();
    }
  }

 ?>

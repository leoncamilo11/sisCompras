<?php
  /**
   *
   */
  class RegistroComprasModelo extends Conexion
  {

    public function registrarComprasModelo()
    {
      $c_bd = Conexion::conectar() -> prepare("CALL 'InsertCompras'(:Consecutivo, :NoIntend, :Objeto, :NoRequisicion, :IdValorFk, :IdProcedimientoFk, :IdTipoCompraFk, :IdSolicitanteFk, :IdLugarEntregaFk, :IdProcesoFk)")
      $c_bd -> bindParam(":Consecutivo", $consecutivo, PDO::PARAM_STR);
      $c_bd -> bindParam(":NoIntend", $consecutivo, PDO::PARAM_STR);
      $c_bd -> bindParam(":Objeto", $consecutivo, PDO::PARAM_STR);
      $c_bd -> bindParam(":NoRequisicion", $consecutivo, PDO::PARAM_STR);
      $c_bd -> bindParam(":IdValorFk", $consecutivo, PDO::PARAM_STR);
      $c_bd -> bindParam(":IdProcedimientoFk", $consecutivo, PDO::PARAM_STR);
      $c_bd -> bindParam(":IdTipoCompraFk", $consecutivo, PDO::PARAM_STR);
      $c_bd -> bindParam(":IdSolicitanteFk", $consecutivo, PDO::PARAM_STR);
      $c_bd -> bindParam(":IdLugarEntregaFk", $consecutivo, PDO::PARAM_STR);
      $c_bd -> bindParam(":IdProcesoFk", $consecutivo, PDO::PARAM_STR);
    }
  }

 ?>

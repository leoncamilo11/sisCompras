<?php
  /**
   *
   */
  class SelectModelo extends Conexion
  {

    public function selectDinamicoModelo(string $opc)
    {
      switch ($opc) {
        case "1":
        //Lista Desplegable Roles
          $c_bd=Conexion::conectar()->prepare("SELECT IdRol, Rol FROM rol");
          $c_bd -> execute();
          return $c_bd -> fetchAll();
          $c_bd -> close();
          break;

        case "2":
        //Lista Desplegable Proyectos
          $c_bd=Conexion::conectar()->prepare("SELECT IdProyecto, Proyecto FROM proyecto");
          $c_bd -> execute();
          return $c_bd -> fetchAll();
          $c_bd -> close();
          break;

        case "3":
        //Lista Desplegable Tipo Compra
          $c_bd=Conexion::conectar()->prepare("SELECT IdTipoCompra, TipoCompra FROM tipoCompra");
          $c_bd -> execute();
          return $c_bd -> fetchAll();
          $c_bd -> close();
          break;

        case "4":
        //Lista Desplegable Responsable
          $c_bd=Conexion::conectar()->prepare("SELECT IdUsuario, Nombre, Apellido FROM usuario WHERE IdRol = 2");
          $c_bd -> execute();
          return $c_bd -> fetchAll();
          $c_bd -> close();
          break;

        case "5":
        //Lista Desplegable Departamento
          $c_bd=Conexion::conectar()->prepare("SELECT IdDepartamento, Departamento FROM departamento");
          $c_bd -> execute();
          return $c_bd -> fetchAll();
          $c_bd -> close();
          break;

        case "6":
        //Lista Desplegable Municipio
          $c_bd=Conexion::conectar()->prepare("SELECT IdMunicipio, Municipio FROM municipio");
          $c_bd -> execute();
          return $c_bd -> fetchAll();
          $c_bd -> close();
          break;

        case "7":
        //Lista Desplegable Solicitante
          $c_bd=Conexion::conectar()->prepare("SELECT IdUsuario, Nombre, Apellido FROM usuario WHERE IdRol = 1");
          $c_bd -> execute();
          return $c_bd -> fetchAll();
          $c_bd -> close();
          break;

        case "8":
        //Lista Desplegable Procedimeinto
          $c_bd=Conexion::conectar()->prepare("SELECT IdProcedimientoPk, Procedimiento FROM procedimiento");
          $c_bd -> execute();
          return $c_bd -> fetchAll();
          $c_bd -> close();
          break;
      }
    }
  }

 ?>

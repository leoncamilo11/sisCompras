<?php
  /**
   *
   */
  class SelectControlador
  {

    public function selectDinamicoControlador(string $opc)
    {
      $respuesta=SelectModelo::selectDinamicoModelo($opc);
      switch ($opc) {
        case "1":
        //Lista Desplegable Roles
          echo ('<select placeholder="Seleccione un Rol" name="idRol" id="idRol">');
          foreach ($respuesta as $row) {
            echo ('<option value="' . $row["IdRol"] . '">' . $row["Rol"] . '</option>');
          }
          echo ('</select>');
          echo ('<label for="idRol">Seleccione un Rol</label>');
          break;

        case "2":
        //Lista Desplegable Proyectos
          echo ('<select placeholder="Seleccione un Proyecto" name="idProyecto" id="idProyecto">');
          foreach ($respuesta as $row) {
            echo ('<option value="' . $row["IdProyecto"] . '">' . $row["Proyecto"] . '</option>');
          }
          echo ('</select>');
          echo ('<label for="idProyecto">Seleccione un Proyecto</label>');
          break;

        case "3":
        //Lista Desplegable Tipo Compra
          echo ('<select placeholder="Seleccione un Tipo de Compra" name="idTipoCompra" id="idTipoCompra">');
          foreach ($respuesta as $row) {
            echo ('<option value="' . $row["IdTipoCompra"] . '">' . $row["TipoCompra"] . '</option>');
          }
          echo ('</select>');
          echo ('<label for="idTipoCompra">Seleccione un Tipo de Compra</label>');
          break;

        case "4":
        //Lista Desplegable Responsable
          echo ('<select placeholder="Seleccione un Responsable" name="idResponsable" id="idResponsable">');
          foreach ($respuesta as $row) {
            echo ('<option value="' . $row["IdUsuario"] . '">' . $row["Nombre"] . " " . $row["Apellido"] .  '</option>');
          }
          echo ('</select>');
          echo ('<label for="idResponsable">Seleccione un Responsable</label>');
          break;

        case "5":
        //Lista Desplegable Departamento
          echo ('<select placeholder="Seleccione un Departamento" name="idDepartamento" id="idDepartamento">');
          foreach ($respuesta as $row) {
            echo ('<option value="' . $row["IdDepartamento"] . '">' . $row["Departamento"] . '</option>');
          }
          echo ('</select>');
          echo ('<label for="idDepartamento">Seleccione un Departamento</label>');
          break;

        case "6":
        //Lista Desplegable Municipio
          echo ('<select placeholder="Seleccione un Municipio" name="idMunicipio" id="idMunicipio">');
          foreach ($respuesta as $row) {
            echo ('<option value="' . $row["IdMunicipio"] . '">' . $row["Municipio"] . '</option>');
          }
          echo ('</select>');
          echo ('<label for="idMunicipio">Seleccione un Municipio</label>');
          break;

        case "7":
        //Lista Desplegable Solicitante
          echo ('<select placeholder="Seleccione un Solicitante" name="idSolicitante" id="idSolicitante">');
          foreach ($respuesta as $row) {
            echo ('<option value="' . $row["IdUsuario"] . '">' . $row["Nombre"] . " " . $row["Apellido"] . '</option>');
          }
          echo ('</select>');
          echo ('<label for="idSolicitante">Seleccione un Solicitante</label>');
          break;

        case "8":
        //Lista Desplegable Procedimiento
          echo ('<select placeholder="Seleccione un Procedimiento" name="idProcedimiento" id="idProcedimiento">');
          foreach ($respuesta as $row) {
            echo ('<option value="' . $row["IdProcedimiento"] . '">' . $row["Procedimiento"] . '</option>');
          }
          echo ('</select>');
          echo ('<label for="idProcedimiento">Seleccione un Procedimiento</label>');
          break;
      }
    }
  }

 ?>

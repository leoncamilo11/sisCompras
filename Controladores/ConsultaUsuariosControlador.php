<?php
  /**
   *
   */
  class ConsultaUsuariosControlador
  {

    function consultarUsuariosControlador($view)
    {
      ob_start();
      if (isset($_POST["idRol"])) {
        $rol = $_POST["idRol"];
      } else {
        $rol = null;
      }
      $usuarios = ConsultaUsuariosModelo::consultarUsuariosModelo($rol);
      echo "<thead>";
        echo "<tr>
                <th>#</th>
                <th>Identificacion</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>E-mail</th>
                <th>Rol</th>
                <th>Proyecto</th>
                <th>Editar</th>
                <th>Inhabilitar</th>";
        echo "</tr>";
      echo "</thead>";
      echo "<tbody>";
      foreach ($usuarios as $usuario) {
        echo "<tr>";
          echo "<td>" . $usuario["IdUsuario"] . "</td>";
          echo "<td>" . $usuario["Identificacion"] . "</td>";
          echo "<td>" . $usuario["Nombre"] . "</td>";
          echo "<td>" . $usuario["Apellido"] . "</td>";
          echo "<td>" . $usuario["Email"] . "</td>";
          echo "<td>" . $usuario["Rol"] . "</td>";
          echo "<td>" . $usuario["Proyecto"] . "</td>";
          echo "<td><a class='waves-effect waves-light btn green accent-4' href='index.php?actualizarU=" . $usuario["IdUsuario"] . "'><i class='material-icons'>mode_edit</i></a></td>";
          echo "<td><a class='waves-effect waves-light btn red accent-4' href='index.php?desactivarU=" . $usuario["Identificacion"] . "'><i class='material-icons'>error</i></a></td>";
        echo "</tr>";
      }
      echo "</tbody>";
    }
  }

 ?>

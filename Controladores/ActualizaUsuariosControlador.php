<?php
  /**
   *
   */
  class ActualizaUsuariosControlador
  {

    public function actualizarUsuariosControlador()
    {
      if (isset($_GET["actualizarU"])) {
        $_SESSION["id"] = $_GET["actualizarU"];
        header("location:actualizarUsuarios");
      }
    }

    public function finalizarActualizacionControlador($codigoUsuario)
    {
      if (isset($_POST["identificacion"]) && isset($_POST["nombre"]) &&
          isset($_POST["apellido"]) && isset($_POST["idProyecto"]) &&
          isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["idRol"])) {
        $datosUpdate = array("Identificacion" => $_POST['identificacion'],
                              "Nombre" => $_POST['nombre'],
                              "Apellido" => $_POST['apellido'],
                              "Email" => $_POST['email'],
                              "Clave" => $_POST['password'],
                              "IdRol" => $_POST['idRol'],
                              "IdProyecto" => $_POST['idProyecto']);
        $actualizarU = ActualizaUsuariosModelo::actualizarUsuariosModelo($datosUpdate, $codigoUsuario);
        echo ('<script>
                alert("' . $actualizarU . '");
                window.location.href="consultarUsuarios";
              </script>');
      }
    }
  }

 ?>

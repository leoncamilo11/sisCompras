<?php
  /**
   *
   */
  class RegistroUsuariosControlador
  {

    public function registrarUsuariosControlador()
    {
      if (isset($_POST["identificacion"]) && isset($_POST["nombre"]) && isset($_POST["apellido"]) &&
				isset($_POST["idProyecto"]) && isset($_POST["email"]) &&
				isset($_POST["password"]) && isset($_POST["idRol"])) {
        $datosRegistro = array("Identificacion" => $_POST['identificacion'],
                              "Nombre" => $_POST['nombre'],
                              "Apellido" => $_POST['apellido'],
                              "Email" => $_POST['email'],
                              "Clave" => $_POST['password'],
                              "IdRol" => $_POST['idRol'],
                              "IdProyecto" => $_POST['idProyecto']);
        $respuesta = RegistroUsuariosModelo::registrarUsuariosModelo($datosRegistro);
        echo ('<script>
                alert("' . $respuesta . '");
                window.location.href="registrarUsuarios";
              </script>');
      }
    }
  }

 ?>

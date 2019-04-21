<?php
  /**
   *
   */
  class ActualizaClaveControlador
  {

    public function actualizarClaveControlador()
    {
      if (isset($_POST["claveNueva"])) {
        if ($_POST["password"] == $_SESSION["password"]) {
          if ($_POST["claveNueva"] == $_POST["claveNuevaC"]) {
            $datosUpdate = array("clave" => $_POST['claveNueva'],
                                  "email" => $_SESSION["email"]);
            $respuesta = ActualizaClaveModelo::actualizarClaveModelo($datosUpdate);
            if ($respuesta == "actualizado") {
              echo ("<div class='alert alert-success'>
                      <strong>Actualizado!</strong>Contraseña actualizada correctamente.
                    </div>");
                    header("location:salir");
            } else {
              echo ("<div class='alert alert-success'>
                      <strong>Error!</strong>Contraseña no actualizada.
                    </div>");
            }
          } else {
            echo ("<div class='alert alert-success'>
                    <strong>Error!</strong>Las contraseñas nuevas no coinciden.
                  </div>");
          }
        } else {
          echo ("<div class='alert alert-success'>
                  <strong>Error!</strong>Contraseña anterior no es correcta.
                </div>");
        }
      }
    }
  }

 ?>

<?php
  /**
   *
   */
  class ActivaUsuariosControlador
  {

    public function activarUsuariosControlador()
    {
      if (isset($_GET["activarU"])) {
        $codigoUsuario = $_GET["activarU"];
        $activarU = ActivaUsuariosModelo::activarUsuariosModelo($codigoUsuario);
        echo '<script>
                alert("' . $activarU . '");
                window.location.href="consultarUsuarios";
              </script>';
      }
    }
  }

 ?>

<?php
  /**
   *
   */
  class DesactivaUsuarioControlador
  {

    public function desactivarUsuariosControlador()
    {
      if (isset($_GET["desactivarU"])) {
        $codigoUsuario = $_GET["desactivarU"];
        $desactivarU = DesactivaUsuarioModelo::desactivarUsuariosModelo($codigoUsuario);
        echo '<script>
                alert("'.$desactivarU.'");
                window.location.href="consultarUsuarios";
              </script>';
      }
    }
  }

 ?>

<?php
  /**
   *
   */
  class MvcControlador
  {

    public function plantilla()
    {
      include "Vistas/template.php";
    }

    public function enalcesPaginasControlador()
    {
      $enlace = "introduccion";
      if (isset($_GET["llamar"])) {
        $enlace = $_GET["llamar"];
      } else if (isset($_GET["desactivarU"]) || isset($_GET["ModificarU"]) || isset($_GET["activarU"])) {
				$enlace = "consultarUsuarios";
      } else if (isset($_GET["actualizarU"])) {
				$enlace = "actualizarUsuarios";
			} elseif (isset($_GET["compras"])) {
        $enlace = "compras";
      } elseif (isset($_GET["reportes"])) {
        $enlace = "reportes";
      } elseif (isset($_GET["usuarios"])) {
        $enlace = "usuarios";
      } else {
        $enlace = "introduccion";
      }
      $modulo = MvcModelo::enlacesPaginasModelo($enlace);
      include $modulo;
    }
  }
 ?>

<?php
  /**
   *
   */
  class MvcModelo
  {

    public function enlacesPaginaModelo($enlace)
    {
      $modulo = "Vistas/Modulos/";
      $enlaces = array("introduccion", "login", "compras", "reportes", "salir",
                        "usuarios", "actualizarClave");
      if (in_array($enlace, $enlaces)) {
        $modulo = $modulo . $enlace . ".php";
      } else {
        $modulo = $modulo . "introduccion.php";
      }
      return  $modulo;
    }
  }

 ?>

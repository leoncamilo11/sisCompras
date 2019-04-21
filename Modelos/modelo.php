<?php
  /**
   *
   */
  class MvcModelo
  {

    public function enlacesPaginasModelo($enlace)
    {
      $modulo = "Vistas/Modulos/";
      $enlaces = array("introduccion", "login", "compras", "reportes", "salir",
                        "usuarios", "actualizarClave", "registrarUsuarios",
                        "consultarUsuarios", "registrarCompras", "consultarUsuariosDes",
                        "actualizarUsuarios");
      if (in_array($enlace, $enlaces)) {
        $modulo = $modulo . $enlace . ".php";
      } else {
        $modulo = $modulo . "introduccion.php";
      }
      return  $modulo;
    }
  }

 ?>

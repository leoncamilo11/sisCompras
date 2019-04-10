<?php
  /**
   *
   */
  class MvcModelo
  {

    public function enlacesPaginaModelo($enlace)
    {
      $modulo = "Vistas/Modulos/";
      $enlaces = array("introduccion", "login", "prueba2");
      if (in_array($enlace, $enlaces)) {
        $modulo = $modulo . $enlace . ".php";
      } else {
        $modulo = $modulo . "introduccion.php";
      }
      return  $modulo;
    }
  }

 ?>

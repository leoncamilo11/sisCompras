<?php
  /**
   *
   */
  class MvcController
  {

    public function plantilla()
    {
      include "Vistas/template.php";
    }

    public function controladorEnalcesPaginas()
    {
      $enlace = "introduccion";
      if (isset($_GET["llamar"])) {
        $enlace = $_GET["llamar"];
      } elseif (isset($_GET["compras"])) {
        $enlace = "compras";
      } elseif (isset($_GET["reportes"])) {
        $enlace = "reportes";
      } elseif (isset($_GET["usuarios"])) {
        $enlace = "usuarios";
      } else {
        $enlace = "introduccion";
      }
      $modulo=MvcModelo::enlacesPaginaModelo($enlace);
      include $modulo;
    }
  }
 ?>

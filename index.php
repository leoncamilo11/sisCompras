<?php
  require_once "Controladores/controlador.php";
  require_once "Controladores/controladorMenu.php";
  require_once "Controladores/controladorIngreso.php";

  require_once "Modelos/conexion.php";
  require_once "Modelos/modelo.php";
  require_once "Modelos/modeloIngreso.php";

  $mvc = new MvcController();
  $mvc->plantilla();
 ?>

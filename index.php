<?php
  require_once "Controladores/Controlador.php";
  require_once "Controladores/ActualizaClaveControlador.php";
  require_once "Controladores/IngresoControlador.php";
  require_once "Controladores/RegistroUsuariosControlador.php";
  require_once "Controladores/MenuControlador.php";
  require_once "Controladores/SelectControlador.php";
  require_once "Controladores/ConsultaUsuariosControlador.php";
  require_once "Controladores/DesactivaUsuariosControlador.php";
  require_once "Controladores/ConsultaUsuariosDesControlador.php";
  require_once "Controladores/ActivaUsuariosControlador.php";
  require_once "Controladores/ActualizaUsuariosControlador.php";

  require_once "Modelos/Modelo.php";
  require_once "Modelos/Conexion.php";
  require_once "Modelos/IngresoModelo.php";
  require_once "Modelos/ActualizaClaveModelo.php";
  require_once "Modelos/SelectModelo.php";
  require_once "Modelos/RegistroUsuariosModelo.php";
  require_once "Modelos/ConsultaUsuariosModelo.php";
  require_once "Modelos/DesactivaUsuariosModelo.php";
  require_once "Modelos/ConsultaUsuariosDesModelo.php";
  require_once "Modelos/ActivaUsuariosModelo.php";
  require_once "Modelos/ActualizaUsuariosModelo.php";

  $mvc = new MvcControlador();
  $mvc->plantilla();
 ?>

<?php
  session_start();
  ob_start();
 ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <title>CONTROL COMPRAS</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />
    <link rel="stylesheet" type="text/css" href="Vistas/css/estilos.css">
    <link rel="stylesheet" type="text/css" href="Vistas/css/materialize.css">
    <link rel="stylesheet" type="text/css" href="Vistas/css/materialize.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  </head>
  <!--<body onload="mostrar()">-->
  <body>
    <div class="cuerpo">
      <header class="encabezado">
        <?php
          include "Modulos/menu.php";
         ?>
      </header>
      <div class="contenido">
        <?php
          $mvc = new MvcController();
          $mvc -> controladorEnalcesPaginas();
          //$con = new Conexion;
          //$con -> conectar();
         ?>
      </div>
      <footer class="final">
        Sistema Control Compras Fao Colombia
      </footer>
    </div>
    <script type="text/javascript" src="Vistas/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="Vistas/js/materialize.min.js"></script>
    <script type="text/javascript" src="Vistas/js/funciones.js"></script>
  </body>
</html>
<?php
  ob_end_flush();
 ?>

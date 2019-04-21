<?php
  /**
   *
   */
  class IngresoControlador
  {

    public function ingresarControlador()
    {
      if (isset($_POST["email"]) && strlen($_POST["email"])>0) {
        $email = $_POST["email"];
        if (isset($_POST["email"]) && isset($_POST["password"])) {
          $datosControlador = array("email" => $_POST["email"], "clave" => $_POST["password"]);
          $respuesta = IngresoModelo::ingresarModelo($datosControlador);
          if ($respuesta["Email"] == $_POST["email"] && $respuesta["Clave"] == $_POST["password"] && $respuesta["Identificacion"] && $respuesta["Nombre"] && $respuesta["Apellido"] && $respuesta["IdRol"] && $respuesta["IdProyecto"]) {
            echo ("<div class='alert alert-success'><strong>Excelente!</strong>Ingreso satisfactorio al sistema.</div>");
            $_SESSION["email"]=$respuesta["Email"];
						$_SESSION["password"]=$respuesta["Clave"];
            $_SESSION["identificacion"]=$respuesta["Identificacion"];
						$_SESSION["nombre"]=$respuesta["Nombre"];
						$_SESSION["apellido"]=$respuesta["Apellido"];
						$_SESSION["rol"]=$respuesta["IdRol"];
            $_SESSION["proyecto"]=$respuesta["IdProyecto"];
						$_SESSION["sesionIniciada"]=true;
            if ($respuesta["IdRol"] == 3) {
              header("location:introduccion");
            } elseif ($respuesta["IdRol"] == 1 || $respuesta["IdRol"] == 2) {
              header("location:introduccion");
            }
          } else {
            echo ("<div class='alert alert-success'><strong>Error!</strong>Problemas con la informacion de ingreso al sistema</div>");
          }
        }
      }
    }
  }
 ?>

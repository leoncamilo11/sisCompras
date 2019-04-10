<?php
  /**
   *
   */
  class ControladorIngreso
  {

    public function ControladorIngresar()
    {
      if (isset($_POST["email"]) && strlen($_POST["email"])>0) {
        $email = $_POST["email"];
        if (isset($_POST["email"]) && isset($_POST["password"])) {
          $datosControlador = array("email" => $_POST["email"], "clave" => $_POST["password"]);
          $respuesta = ModeloIngreso::ModeloIngresar($datosControlador);
          if ($respuesta["Email"] == $_POST["email"] && $respuesta["Clave"] == $_POST["password"] && $respuesta["Nombre"] && $respuesta["Apellido"] && $respuesta["IdRolFk"] && $respuesta["IdProyectoFk"]) {
            echo ("<div class='alert alert-success'><strong>Excelente!</strong>Ingreso satisfactorio al sistema.</div>");
            $_SESSION["email"]=$respuesta["Email"];
						$_SESSION["password"]=$respuesta["Clave"];
						$_SESSION["nombre"]=$respuesta["Nombre"];
						$_SESSION["apellido"]=$respuesta["Apellido"];
						$_SESSION["rol"]=$respuesta["IdRolFk"];
            $_SESSION["proyecto"]=$respuesta["IdProyectoFk"];
						$_SESSION["sesionIniciada"]=true;
            if ($respuesta["IdRolFk"] == 3) {
              echo "Hola";
              header("location:introduccion");
            } elseif ($respuesta["IdRolFk"] == 1 || $respuesta["IdRolFk"] == 2) {
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

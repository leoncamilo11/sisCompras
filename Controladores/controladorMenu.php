<?php
  /**
   *
   */
  class MenuController
  {

    public function MenuUsuariosController()
    {
      ob_start();
      if (isset($_SESSION["sesionIniciada"])) {
        if ($_SESSION["rol"] == 3) {
          echo '<li><a href="usuarios" class="dropdown-button btn" data-activates="listaUsuarios">Usuarios<i class="material-icons right">supervisor_account</i></a></li>';
					echo '<li><a href="compras" class="dropdown-button btn" data-activates="listaCompras">Compras<i class="material-icons right">book</i></a></li>';
					echo '<li><a href="reportes" class="dropdown-button btn" data-activates="listaReportes">Reportes<i class="material-icons right">assignment</i></a></li>';
					echo '<li>'. $_SESSION["nombre"] ." ". $_SESSION["apellido"]. '</li>';
					echo '<li><a href="introduccion" class="dropdown-trigger" data-activates="listaSalida"><i class="material-icons left">arrow_drop_down</i></a></li>';
        } else {
          echo '<li><a href="introduccion" class="waves-effect waves-light btn orange darken-2">INICIO</a>';
          echo '<li><a href="usuarios" class="dropdown-button btn" data-activates="listaUsuarios">Usuarios<i class="material-icons right">supervisor_account</i></a></li>';
          echo '<li><a href="compras" class="dropdown-button btn" data-activates="listaCompras">Compras<i class="material-icons right">book</i></a></li>';
          echo '<li><a href="reportes" class="dropdown-button btn" data-activates="listaReportes">Reportes<i class="material-icons right">assignment</i></a></li>';
					echo '<li>'. $_SESSION["nombre"] ." ". $_SESSION["apellido"].'</li>';
					echo '<li><a href="introduccion" class="dropdown-trigger" data-activates="listaSalida"><i class="material-icons left">arrow_drop_down</i></a></li>';
        }
      } else {
        echo '<a href="login" class="brand-logo right"><i class="material-icons left">lock_open</i>Inicio Sesion</a>';
      }
    }
  }

 ?>

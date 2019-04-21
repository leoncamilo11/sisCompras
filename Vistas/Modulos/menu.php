<!--Menú de usuario-->
<ul id="listaUsuarios" class="dropdown-content">
	<li><a href="consultarUsuarios">Consultar</a></li>
  <?php
    if ($_SESSION["rol"] == 3) {
      echo '<li class="divider"></li>';
      echo '<li><a href="registrarUsuarios">Registrar</a></li>';
      echo '<li><a href="consultarUsuariosDes">Inactivos</a></li>';
    }
   ?>
</ul>

<!--Menú de compra-->
<ul id="listaCompras" class="dropdown-content">
	<li><a href="consultarCompras">Consultar</a></li>
  <li><a href="consultarComprasD">Inactivas</a></li>
  <?php
    if ($_SESSION["rol"] == 3) {
      echo '<li class="divider"></li>';
      echo '<li><a href="registrarCompras">Registrar</a></li>';
      echo '<li><a href="editarCompras">Editar</a></li>';
    } elseif ($_SESSION["rol"] == 2) {
      echo '<li class="divider"></li>';
      echo '<li><a href="editarCompras">Editar</a></li>';
    }
   ?>
</ul>

<!--Menú de reportes-->
<ul id="listaReportes" class="dropdown-content">
	<li><a href="reporteCompras">Compras</a></li>
  <?php
    if ($_SESSION["rol"] == 3) {
      echo '<li class="divider"></li>';
      echo '<li><a href="reporteComprasT">Tiempos</a></li>';
    }
   ?>

</ul>

<!--Menú de salida-->
<ul id="listaSalida" class="dropdown-content">
	<li><a href="actualizarClave">Cambiar clave</a></li>
	<li class="divider"></li>
	<li><a href="salir">Salir</a></li>
</ul>

<!--Navbar de la aplicación-->
<nav>
  <div class="nav-wrapper blue darken-3">
    <a href="introduccion"><img class="logoNav" src="Vistas/imagenes/logoF.png"></a>
    <ul class="right hide-on-med-and-down" id="list" name="list">
			<?php
				$menu = new MenuControlador();
				$menu -> menuUsuariosControlador();
			 ?>
    </ul>
  </div>
</nav>

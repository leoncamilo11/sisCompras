<?php
  if ($_SESSION["sesionIniciada"]==true) {
    if ($_SESSION["rol"]!=3) {
      header("location:introduccion");
      exit();
    }
  } else {
    header("location:login");
    exit();
  }
 ?>

 <section id="usuarios" name="usuarios">
	<br>
	<div class="container">
		<div class="container">
			<h2>CONSULTAR USUARIOS</h2>
			<form method="post">
				<div class="row">
					<div class="input-field col s6">
            <?php
              $rol = new SelectControlador();
              $rol -> selectDinamicoControlador("1");
            ?>
					</div>
					<div class="input-field col s6">
						<button class="btn waves-effect waves-light indigo darken-4" type="submit" name="consultarU" id="consultarU">Consultar
						<i class="material-icons right">send</i>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<br>
	<table id="table_id" name="table_id" class="display">
		<?php
			$consultaU = new ConsultaUsuariosControlador();
			$consultaU -> consultarUsuariosControlador('vusuarios');
		?>
	</table>

</section>

<?php
	$desactivarU = new DesactivaUsuarioControlador();
	$desactivarU -> desactivarUsuariosControlador();

	$actualizar = new ActualizaUsuariosControlador();
	$actualizar -> actualizarUsuariosControlador();

  $activarU = new ActivaUsuariosControlador();
  $activarU -> activarUsuariosControlador();
?>

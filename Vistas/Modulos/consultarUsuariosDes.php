<?php
  if ($_SESSION["sesionIniciada"] == true) {
    // code...
  } else {
    header("location:login");
    exit();
  }
 ?>

 <section>
 <div class="container">
 		<div class="container">
 			<h2>CONSULTAR USUARIOS INACTIVOS</h2>
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
 			$consultaU = new ConsultaUsuariosDesControlador();
 			$consultaU -> consultarUsuariosDesControlador();
 		?>
 	</table>
 </section>

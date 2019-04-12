<div>
	<form method="post">
		<div class="row">
			<div class="col s12 m3"></div>
			<div class="col s12 m6">
				<div class="card medium">
					<div class="card-panel indigo darken-4">
						<span class="card-title white-text">Cambiar Contraseña</span>
					</div>
					<div class="card-content">
						<div class="row">
							<div class="input-field col s6">
								<input type="password" name="password" id="password" required>
								<label for="password">Clave anterior</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s6">
								<input type="password" name="claveN" id="claveN" required>
								<label for="claveN">Nueva Clave</label>
							</div>
							<div class="input-field col s6">
								<input type="password" name="claveNc" id="claveNc" required>
								<label for="claveNc">Confirmar Nueva Clave</label>
							</div>
						</div>
					</div>
					<div class="card-action">
						<?php
							//$claveN = new ActualizaClaveController();
							//$claveN -> ActualizarClaveController();
						?>
						<button class="btn waves-effect waves-light indigo darken-4" type="submit" name="registrar" id="registar">Cambiar Contraseña
						<i class="material-icons right">send</i></button>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>

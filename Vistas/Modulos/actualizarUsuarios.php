<div>
	<form method="post">
		<div class="row">
			<div class="col s1"></div>
			<div class="col s10">
				<div class="card" id="cardActualizarU">
					<div class="card-panel indigo darken-4">
						<span class="card-title white-text">Actualizar Usuario</span>
					</div>
					<div class="card-content">
						<?php
              $codigoU = $_GET["actualizarU"];
              $cargar = ActualizaUsuariosModelo::consultarUsuariosModelo($codigoU);
              foreach ($cargar as $cargar) {
                echo '<div class="row">';
                  echo '<div class="input-field col s2 offset-s1">';
                    echo '<input type="number" name="identificacion" id="identificacion" value="'. $cargar["Identificacion"] .'">';
                    echo '<label for="identificacion">Identificacion</label>';
                  echo '</div>';
   					      echo '<div class="input-field col s4">';
                    echo '<input type="text" name="nombre" id="nombre" value="'. $cargar["Nombre"] .'">';
     						    echo '<label for="nombre">Nombre</label>';
   						    echo '</div>';
                  echo '<div class="input-field col s4">';
                    echo '<input type="text" name="apellido" id="apellido" value="'. $cargar["Apellido"] .'">';
                    echo '<label for="apellido">Apellido</label>';
                  echo '</div>';
     						echo '</div>';
                echo '<div class="row">
									<p class="input-field col s12 red-text center">**Si no se actualiza el rol o el proyecto, dejarlos como indican los recuadros sombreados o deshabilitados.**</p>';
								echo '</div>';
     						echo '<div class="row">';
                  echo '<div class="input-field col s2 offset-s2">';
                    echo '<input type="text" name="proyectoA" id="proyectoA" value="'. $cargar["Proyecto"].'" disabled>';
                    echo '<label for="proyectoA">Proyecto Actual</label>';
                  echo '</div>';
     							echo '<div class="input-field col s2">';
         									$proyecto = new SelectControlador();
         									$proyecto -> selectDinamicoControlador("2");
     							echo '</div>';
                  echo '<div class="input-field col s2">';
                    echo '<input type="text" name="rolA" id="rolA" value="'. $cargar["Rol"].'" disabled>';
                    echo '<label for="rolA">Rol Actual</label>';
                  echo '</div>';
                  echo '<div class="input-field col s2">';
                          $rol = new SelectControlador();
                          $rol -> selectDinamicoControlador("1");
     							echo '</div>';
     						echo '</div>';
     						echo '<div class="row">';
     							echo '<div class="input-field col s4 offset-s1">';
     								echo '<input type="password" name="password" id="password" value="'. $cargar["Clave"].'">';
     								echo '<label for="password">Contraseña</label>';
     							echo '</div>';
                  echo '<div class="input-field col s6">';
     								echo '<input type="email" name="email" multiple id="email" value="'. $cargar["Email"].'">';
     								echo '<label for="email">Correo Electronico</label>';
     							echo '</div>';
     						echo '</div>';
              }
              $actualizar = new ActualizaUsuariosControlador();
              $actualizar -> finalizarActualizacionControlador($codigoU);
             ?>
					</div>
					<div class="card-action">
						<button class="btn waves-effect waves-light indigo darken-4" type="submit" name="registrar" id="registar">ACTUALIZAR
						<i class="material-icons right">mode_edit</i>
						</button>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>

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

 <div id="registroU">
 	<form method="post">
 		<div class="row">
      <div class="col s1"></div>
 			<div class="col s10">
 				<div class="card" id="cardUsers">
 					<div class="card-panel blue darken-3">
 						<span class="card-title white-text">Registro de usuarios</span>
 					</div>
 					<div class="card-content">
 						<div class="row">
 							<div class="input-field col s5 offset-s1">
                <input type="text" name="nombre" id="nombre" required>
 								<label for="nombre">Nombre</label>
 							</div>
 							<div class="input-field col s5">
                <input type="text" name="apellido" id="apellido" required>
 								<label for="apellido">Apellido</label>
 							</div>
 						</div>
 						<div class="row">
              <div class="input-field col s4 offset-s1">
								<input type="number" name="identificacion" id="identificacion" required>
								<label for="identificacion">Identificacion</label>
							</div>
 							<div class="input-field col s3">
 								<?php
 									$proyecto = new SelectControlador();
 									$proyecto -> selectDinamicoControlador("2");
 								?>
 							</div>
              <div class="input-field col s3">
 								<?php
                $rol = new SelectControlador();
                $rol -> selectDinamicoControlador("1");
 								?>
 							</div>
 						</div>
 						<div class="row">
 							<div class="input-field col s4 offset-s1">
 								<input type="password" name="password" id="password" required maxlength="16">
 								<label for="password">Contraseña</label>
 							</div>
              <div class="input-field col s6">
 								<input type="email" name="email" multiple id="email" required>
 								<label for="email">Correo Electronico</label>
 							</div>
 						</div>
 					</div>
 					<div class="card-action">
 						<?php
 							$rUsuario = new RegistroUsuariosControlador();
 							$rUsuario -> registrarUsuariosControlador();
 						?>
 						<button class="btn waves-effect waves-light blue darken-3" type="submit" name="registrarU" id="registarU">REGISTAR
 						<i class="material-icons right">send</i>
 						</button>
 					</div>
 				</div>
 			</div>
 		</div>
 	</form>
 </div>

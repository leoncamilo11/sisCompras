<?php
  if ($_SESSION["sesionIniciada"] == true) {
    if ($_SESSION["rol"] != 3) {
      header("location:introduccion");
      exit();
    }
  } else {
    header("location:login");
    exit();
  }
 ?>

 <div class="row">
  <div class="col s12">
  	<div class="card" id="cardBooks">
  		<div class="card-panel blue darken-3 white-text">
  			<span class="card-title">Registrar Compras</span>
  		</div>
  		<form method="POST">
  			<div class="card-content">
  				<div class="row">
  					<div class="input-field col s2">
  						<input type="number" name="consecutivo" id="consecutivo" required>
  						<label for="consecutivo">Consecutivo</label>
  					</div>
  					<div class="input-field col s2">
  						<input type="number" name="intend" id="intend" required>
  						<label for="intend">No. Intend</label>
  					</div>
            <div class="input-field col s2">
  						<?php
    						$proyecto = new SelectControlador();
    						$proyecto -> selectDinamicoControlador("2");
  						?>
  					</div>
            <div class="input-field col s6">
              <textarea type="text" name="objeto" id="objeto" class="materialize-textarea" data-length="100" required></textarea>
  						<label for="objeto">Objeto</label>
  					</div>
  				</div>
  				<div class="row" >
            <div class="input-field col s2">
  						<input type="number" name="valorCop" id="valorCop" required>
  						<label for="valorCop">Valor Estimado COP</label>
  					</div>
            <div class="input-field col s2">
  						<input type="number" name="tasaCambio" id="tasaCambio" required>
  						<label for="tasaCambio">Tasa Cambio</label>
  					</div>
            <div class="input-field col s2">
  						<input type="number" name="valorUsd" id="valorUsd" required>
  						<label for="valorUsd">Valor Estimado USD</label>
  					</div>
            <div class="input-field col s2">
  						<?php
  							$procedimiento = new SelectControlador();
  							$procedimiento -> selectDinamicoControlador("8");
  						?>
  					</div>
  					<div class="input-field col s2">
  						<?php
  							$tipoCompra = new SelectControlador();
  							$tipoCompra -> selectDinamicoControlador("3");
  						?>
  					</div>
            <div class="input-field col s2">
  						<input type="number" name="requisicion" id="requisicion" required>
  						<label for="requisicion"> No. Requisicion</label>
  					</div>
  				</div>
  				<div class="row">
            <div class="input-field col s2">
              <?php
                $responsable = new SelectControlador();
                $responsable -> selectDinamicoControlador("4");
              ?>
            </div>
            <div class="input-field col s2">
  						<input type="date" name="fechaEntrega" id="fechaEntrega" required>
  						<label for="fechaEntrega">Fecha Entrega</label>
  					</div>
            <div class="input-field col s2">
  						<?php
  							$departamento = new SelectControlador();
  							$departamento -> selectDinamicoControlador("5");
  						?>
  					</div>
  					<div class="input-field col s2">
  						<?php
  							$municipio = new SelectControlador();
  							$municipio -> selectDinamicoControlador("6");
  						?>
  					</div>
            <div class="input-field col s4">
  						<textarea type="text" name="observacionesEntrega" id="observacionesEntrega"  class="materialize-textarea" data-length="256"></textarea>
  						<label for="observacionesEntrega">Observaciones Entrega</label>
  					</div>
  				</div>
  				<div class="row">
            <div class="input-field col s2">
              <?php
                $solicitante = new SelectControlador();
                $solicitante -> selectDinamicoControlador("7");
              ?>
            </div>
            <div class="input-field col s2">
  						<input type="date" name="fechaAceptado" id="fechaAceptado" required>
  						<label for="fechaAceptado">Fecha Aceptado</label>
  					</div>
  					<div class="input-field col s2">
  						<input type="number" name="trascurridosSyA" id="trascurridosSyA" required>
  						<label for="trascurridosSyA">Dias Entre Solicitud y Aceptacion</label>
  					</div>
  				</div>
  			</div>
  			<div class="card-action">
  				<?php
  					//$rLibro = new RegistroLibrosController();
  					//$rLibro->RegistrarLibrosController();
  				?>
  				<button class="btn waves-effect waves-light blue darken-3" type="submit" name="registrarL" id="registarL">REGISTAR
  				<i class="material-icons right">send</i>
  				</button>
  			</div>
  		</form>
  	</div>
  </div>
 </div>

<?php
  if (isset($_SESSION["sesionIniciada"])) {
    if ($_SESSION["sesionIniciada"] == true) {
      header("location:usuarios");
    }
  }
 ?>
<div id="login">
  <div>
    <form method="post">
      <div class="row">
        <div class="col s12 m8" style="padding-left: 10px">
          <img class="imagenLogin" src="Vistas/imagenes/login.jpg">
        </div>
        <div class="col s12 m4" style="padding-top: 70px">
          <div class="card">
            <div class="card-content">
              <div class="row">
                <div class="input-field col s12">
  									<input type="text" id="email" name="email" required autofocus>
  									<label for="email">CORREO ELECTRONICO</label>
  							</div>
                <div class="input-field col s12">
  									<input type="password" id="password" name="password" required>
  									<label for="password">CONTRASEÑA</label>
  							</div>
                <?php
                  $ingreso = new IngresoControlador();
                  $ingreso -> ingresarControlador();
                ?>
              <button class="btn btn-lg btn-primary btn-block indigo darken-4" type="submit">Ingresar<i class="material-icons left">settings_power</i></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>

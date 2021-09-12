<?php

	session_start();
	if(isset($_SESSION['usuario'])){
		header('location: index.php');
	}else{
		session_destroy();
	}

?>

<div class="form-register">
  	<form action="index.php" method="POST">
  		<section class="form-register">
    		<h4>Iniciar Sesion</h4>
    			<input class="controls" type="email" name="email" id="correo-log" placeholder="Ingrese su Correo" autocomplete="off">
    			<input class="controls" type="password" name="pass" id="pass-log" placeholder="Ingrese su Contraseña" autocomplete="off">
    			<p>Estoy de acuerdo con <a href="">Terminos y Condiciones</a></p>
    			<input class="botons" type="submit" value="Iniciar Sesion" id="submit-log" name="submit_log">
    			<p><a href="index.php?page=registro">Crear Una Cuenta Nueva</a></p>
  		</section>
  	</form>
	<?php
	  
		if(isset($_POST['submit_log']) == true) {

			include "php/configs/seassons/login.php";
		}
	 
	?>
  </div>
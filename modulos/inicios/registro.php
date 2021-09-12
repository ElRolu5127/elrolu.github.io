<?php

	session_start();
	if(isset($_SESSION['usuario'])){
		header('location: index.php');
	}else{
		session_destroy();
	}

?>

<div class="form-register">
  	<form action="index.php?page=registro" method="POST">
  		<section class="form-register">
    		<h4>Formulario Registro</h4>
    			<input class="controls" type="text" name="user-reg" id="user-reg" placeholder="Ingrese su Nombre Completo" autocomplete="off">
    			<input class="controls" type="email" name="email-reg" id="correo-reg" placeholder="Ingrese su Correo" autocomplete="off">
    			<input class="controls" type="password" name="pass-reg" id="pass-reg" placeholder="Ingrese su Contraseña" autocomplete="off">
    			<input class="controls" type="password" name="repass-reg" id="repass-reg" placeholder="Reingrese su Contraseña" autocomplete="off">
    			<p>Estoy de acuerdo con <a href="">Terminos y Condiciones</a></p>
    			<input type="submit" value="Registrar" class="botons" id="submit-reg" name="submit-reg">

    			<p><a href="index.php?page=login">Ya tengo Cuenta</a></p>
  		</section>
  	</form>
	<?php
	
		if(isset($_POST['submit-reg']) == true){
			include "php/configs/seassons/registro.php";
		}

	?>

  </div>
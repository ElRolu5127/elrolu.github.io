<?php

	session_start();
		if(!isset($_SESSION['usuario'])){
		session_destroy();
	}

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/icomoon/style.css">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="js/sticky-menu.js"></script>
	<title>C & C</title>
</head>
<body>

	<?php
	
		if(isset($_SESSION['usuario']) > 0){
			include "php/modules/nav-session.php";
		}else{
			include "php/modules/nav.php";
		}
	
	?>


	<?php

		include "php/configs/modules/modules-config.php";

	?>
	<footer>
		<p class="footer-copy">
			<b>&copy; Copyright</b> Todos los derechos recervados 2021-2030
		</p>
		<article class="footer-redes">
				<a href="" class="btn-footer-redes f">
					<span class="icon-facebook2"> </span>Facebook
				</a>
				<a href="" class="btn-footer-redes y">
					<span class="icon-youtube"> </span>Youtube
				</a>
				<a href="" class="btn-footer-redes t">
					<span class="icon-twitter"> </span>Twitter
				</a>
				<a href="" class="btn-footer-redes i">
					<span class="icon-instagram"> </span>Instagram
				</a>
				<a href="" class="btn-footer-redes g">
					<span class="icon-google2"> </span>Correo
				</a>
				<a href="" class="btn-footer-redes tl">
					<span class="icon-telegram"> </span>Telegram
				</a>
		</article>
		<article class="footer-trycn">
			<a href="" class="btn-footer-tr">
				Terminos y Condiciones
			</a>
			<a href="" class="btn-footer-tr">
				Soporte Tecnico - Correo
			</a>
		</article>
	</footer>
</body>
</html>
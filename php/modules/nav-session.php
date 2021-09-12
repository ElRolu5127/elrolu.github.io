<div id="inicio-nav">
	<article class="menu-prin">
		<ul class="menu-ul-prin">
			<li class="menu-li-prin">
				<a href="index.php" class="btn-sess-menu">Cambio Y Conciencia</a>
			</li>
		</ul>
	</article>
	<input type="checkbox" id="in-nav-menu">
	<label for="in-nav-menu" class="btn-nav-menu">
		<span class="icon-menu abrir-menu"></span><span class="icon-menu4 cerrar-menu"></span> 
		<?php
		        include "php/configs/Database.php";
				$veryemail = $_SESSION['usuario'];
				$verify_log = mysqli_query($conexion, "SELECT * FROM $table_db1 WHERE email='$veryemail'");
				while($consulta = mysqli_fetch_array($verify_log)){
					$user = $consulta['user'];
					echo $user;
				}
		?>

	</label>
	<ul class="ul-nav">
		<li class="li-nav">
			<a href="index.php" class="btn-nav top <?php 


if($_GET){
	if($_GET == 0){
		echo "select";
	}else{
		if($_GET == "inicio"){
			echo "select";
		}
	}
}else{
	echo "select";
}



		?>">
				<span class="icon-home"></span> Inicio
			</a>
		</li>
		<li class="li-nav">
			<a href="" class="btn-nav <?php 


	if($_GET == "tienda"){
		echo "select";
	}



		?>">
				<span class="icon-credit-card"></span> Tienda
			</a>
		</li>
		<li class="li-nav">
			<a href="" class="btn-nav">
				<span class="icon-blogger"></span> Blog
			</a>
		</li>
		<li class="li-nav">
			<a href="" class="btn-nav">
				<span class="icon-newspaper"></span> Foro
			</a>
		</li>
		<li class="li-nav">
			<a href="" class="btn-nav">
				<span class="icon-file-text"></span> Cursos
			</a>
		</li>
		<li class="li-nav">
			<a href="" class="btn-nav">
				<span class="icon-mic"></span> Audios
			</a>
		</li>
		<li class="li-nav">
			<a href="" class="btn-nav">
				<span class="icon-download3"></span> Descargables
			</a>
		</li>
		<li class="li-nav">
			<a href="php/configs/seassons/seassion_stop.php" class="btn-nav">
				<span class="icon-download3"></span> Cerrar Sesion
			</a>
		</li>
	</ul>
</div>
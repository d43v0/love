
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
	<link rel="stylesheet" href="estilos.css">
	<title>Una historia Piciosa</title>
</head>
<body>
	
	<div class="contenedor">
		<header>
			<div class="logo">
				<h1>Los P i c i o s o s</h1>
				<p>Desarrollador Web</p>
			</div>
			<form action="">

				<input type="text" class="barra-busqueda" id="barra-busqueda" placeholder="Buscar"><br>
				<a class="asd" href="login.php">Subir</a>
			</form>
	<center><audio src="music/1.mp3" autoplay="true" loop="true" controls="controls" type="audio/mpeg" preload="preload"></center>

				
			</audio>
			<div class="categorias" id="categorias">
				<a href="#" class="activo">Todos</a>
				<a href="#">Saliendo</a>
				<a href="#">Intradia</a>
				<a href="#">Ajale!!</a>
			</div>
		</header>

	
		<section class="grid" id="grid">
<?php
	include("config.php");
 	$query = mysqli_query($conexion,"SELECT * FROM imagen");
	while($result=mysqli_fetch_array($query))  {
	echo '
				<div class="item" 
				data-categoria="'. $result['categoria'].'" 
				data-etiquetas="'. $result['etiquetas'].'" 
				 data-descripcion="'. $result['descripcion'].'" 
				 >
					 <div class="item-contenido">
				 		<img src="img/'.$result['nombre'].'" alt="">
					 </div>
				</div>
	';
		}
?>
			<div class="item" 
				 data-categoria="ciudades" 
				 data-etiquetas="ciudades autos carros calles" 
				 data-descripcion="1.- Lorem ipsum dolor sit amet consectetur."
			>
				<div class="item-contenido">
					<img src="img/ciudad1.png" alt="">
				</div>
			</div>

			<div class="item"
				 data-categoria="personas"
				 data-etiquetas="personas mujeres"
				 data-descripcion="2.- Lorem ipsum dolor sit amet consectetur."
			>
				<div class="item-contenido">
					<img src="img/persona1.png" alt="">
				</div>
			</div>

			<div class="item"
				 data-categoria="paisajes"
				 data-etiquetas="paisajes montañas mar playas"
				 data-descripcion="3.- Lorem ipsum dolor sit amet consectetur."
			>
				<div class="item-contenido">
					<img src="img/paisaje1.png" alt="">
				</div>
			</div>

			<div class="item"
				 data-categoria="animales"
				 data-etiquetas="animales leones"
				 data-descripcion="4.- Lorem ipsum dolor sit amet consectetur."
			>
				<div class="item-contenido">
					<img src="img/animal1.png" alt="">
				</div>
			</div>




			<div class="item"
				 data-categoria="animales"
				 data-etiquetas="animales pandas"
				 data-descripcion="5.- Lorem ipsum dolor sit amet consectetur."
			>
				<div class="item-contenido">
					<img src="img/animal2.png" alt="">
				</div>
			</div>

			<div class="item"
				 data-categoria="personas"
				 data-etiquetas="personas mujeres"
				 data-descripcion="6.- Lorem ipsum dolor sit amet consectetur."
			>
				<div class="item-contenido">
					<img src="img/persona2.png" alt="">
				</div>
			</div>

			<div class="item"
				 data-categoria="paisajes"
				 data-etiquetas="paisajes montañas niebla"
				 data-descripcion="7.- Lorem ipsum dolor sit amet consectetur."
			>
				<div class="item-contenido">
					<img src="img/paisaje2.png" alt="">
				</div>
			</div>

			<div class="item" 
				 data-categoria="ciudades"
				 data-etiquetas="ciudades paisajes carreteras"
				 data-descripcion="8.- Lorem ipsum dolor sit amet consectetur."
			>
				<div class="item-contenido">
					<img src="img/ciudad2.png" alt="">
				</div>
			</div>

			<div class="item"
				 data-categoria="naturaleza"
				 data-etiquetas="naturaleza hojas plantas"
				 data-descripcion="9.- Lorem ipsum dolor sit amet consectetur.
				 	"
			>
				<div class="item-contenido">
					<img src="img/naturaleza1.png" alt="">
				</div>
			</div>
		</section>

		<section class="overlay" id="overlay">
			<div class="contenedor-img">
				<button id="btn-cerrar-popup"><i class="fas fa-times"></i></button>
				<img src="" alt="">
			</div>
			<p class="descripcion"></p>
		</section>

		<footer class="contenedor">
			<div class="redes-sociales">
				<div class="contenedor-icono">
					<a href="http://www.twitter.com/" target="_blank" class="twitter">
						<i class="fab fa-twitter"></i>
					</a>
				</div>
				<div class="contenedor-icono">
					<a href="http://www.facebook.com/" target="_blank" class="facebook">
						<i class="fab fa-facebook-f"></i>
					</a>
				</div>
				<div class="contenedor-icono">
					<a href="http://www.instagram.com" target="_blank" class="instagram">
						<i class="fab fa-instagram"></i>
					</a>
				</div>
			</div>
			<div class="creado-por">
				<p>Sitio diseñado por <a href="#">D & P Tecnology</a> - <a href="https://www.google.com">Nuestra web  </a></p>
			</div>
		</footer>
	</div>

	<script src="https://unpkg.com/web-animations-js@2.3.2/web-animations.min.js"></script>
	<script src="https://unpkg.com/muuri@0.8.0/dist/muuri.min.js"></script>
	<script src="main.js"></script>
</body>
</html>
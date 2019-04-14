<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>El Laboratorio de Jose</title>
		<link rel="stylesheet" href="css/estiloPagina.css">
	</head>
	<body>
		<div id="encabezado_fijo">
			<header>
				El Laboratorio de Jose
			</header>
			<nav>
		  		<a href="#skills">Skills</a>
	      		<a href="#juegos">Juegos</a>
	      		<a href="#animaciones">Animaciones</a>    		
				<?php
				
	      		session_start();
				$_SESSION['contador']++;
					echo "Bienvenido\t $_SESSION[username] ($_SESSION[contador])! <a href='scripts/php/salir.php' id='salir'> Salir</a>";
				?>
			</nav>
		</div>
		<div id="contenido">
			<article>
				<section>
					<h2 id="skills">Skills</h2>
						<ul>
	  						<li>Diseño de interfaces graficas de usuario (UI).</li> 
	  						<li>Ilustrador y animador 2d con graficos vectoriales.</li>
	  						<li>Programación orientada a objetos (C++, Java, ActionScript3, Javascript, Php).</li>
	  						<li>Diseño y desarrollo de juegos flash para navegador.</li>
	  						<li>Diseño y desarrollo de juegos para desktop, Android y IOS con Libgdx.</li>
	  						<li>Dominio intermedio de lenguaje inglés.</li>
	  						<li>Manejo de herramientas como Git, Bitbucket, GitHub, Graddle, Android Studio, Eclipse, JSON, Pocketsphinx-Android.</li>
	  						<li>Desarrollo web Integral (Html5, Css3, Responsive design, Bootstrap, Jquery, Mysql).</li>
						</ul>
					<h2 id="juegos">Juegos</h2>
					<!---->
					<h4>Hámster Shot</h4>
					<div class="imagenes">
						<img src="recursos/imagenes/1.png" alt="hs1">
						<img src="recursos/imagenes/2.png" alt="hs1">
						<img src="recursos/imagenes/3.png" alt="hs1">
						<img src="recursos/imagenes/4.png" alt="hs1">
					</div>
					<div id="linkExterno">
						<a href="https://www.kongregate.com/games/softtesla/hamster-shot"  target=”_blank”> Haz Click Aca para jugar el juego en Kongregate!</a>
					</div>
					<p><em>Anotaciones:</em></p>
					<ul>
	  					<li>Primer y unico juego que publiqué (enero 2016).</li>
						<li>Juego de Navegador diseñado y programado enteramente en Adobe Flash Professional cs6.</li>
						<li>Disponible en diversos sitios web, siendo el oficial Kongregate.com</li>
						<li>Se apoya en la librería Box2d versión AS3 para la física.</li>
					</ul>
					<!---->
					<h4>The recycling game</h4>
					<div class="imagenes">
						<img src="recursos/imagenes/5.png" alt="hs1">
						<img src="recursos/imagenes/6.png" alt="hs1">
						<img src="recursos/imagenes/7.png" alt="hs1">
					</div>
					<p><em>Anotaciones:</em></p>
					<ul>
	  					<li>Trabajo freelance a pedido de un cliente en el sitio web  "freelancer.com".</li>
						<li>Juego de Navegador diseñado y programado enteramente en Adobe Flash Professional cs6.</li>
						<li>El proyecto consistía en crear un videojuego que fomentara el reciclaje en la mente de los niños de una escuela en Brunei (Asia).</li>
						<li>La comunicación se manejó enteramente en ingles a través de la plataforma.</li>
						<li>Recomendación y nota en mi perfil de <a href="https://www.freelancer.com.ar/u/josemiguelH" target=”_blank”>freelancer.com</a>.</li>
					</ul>
					<!---->
					<h4>Hitdog (Incompleto-Experimental, Flash-2015)</h4>
					<div class="imagenes_horizontales">
						<img src="recursos/imagenes/8.png" alt="hs1">
						<img src="recursos/imagenes/9.png" alt="hs1">
						<img src="recursos/imagenes/10.png" alt="hs1">
					</div>
					<!---->
					<h4>Firefigther Cloud y Sangris(Incompletos-Experimental, Flash-2014)</h4>
					<div class="imagenes_horizontales">
						<img src="recursos/imagenes/11.png" alt="hs1">
						<img src="recursos/imagenes/12.png" alt="hs1">
					</div>
					<!---->
					<h4>Entrenando a Bingo/Guiando a Chipi (Incompleto, Android-2018)</h4>
					<div class="imagenes_verticales">
						<img src="recursos/imagenes/13.png" alt="hs1">
						<img src="recursos/imagenes/14.png" alt="hs1">
						<img src="recursos/imagenes/15.png" alt="hs1">
					</div>
					<p><em>Anotaciones:</em></p>
					<ul>
						<li>Estilo pixelart desarrollado con Piskel.</li>
						<li>El objetivo era guiar a través de comandos de voz al personaje para que sobreviva en un mundo que genera entidades al azar a través de un algoritmo.</li>
	  					<li>Juego desarrollado con librerías open source: SO Ubuntu, framework Libgdx, librería de fisica Box2d versión java y para el reconocimiento de voz una libreria offline llamada pocketsphinx en su version para Android.</li>
						<li>Fue semifinalista del <a href="http://pressover.news/noticias/potenciate-videojuegos-90-semifinalistas/" target="_blank">concurso</a> poténciate videojuegos 2018 del gobierno de la ciudad de la ciudad de Buenos Aires.</li>
					</ul>
				</section>
				<section>
					<h2 id="animaciones">Animaciones</h2>
					<h4>El Aso</h4>
					<!--codigo copiado del boton compartir de youtube-->
					<div class="video">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/eGVnf6894KM" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					<iframe width="560" height="315" src="https://www.youtube.com/embed/Ag1IFp08cZQ" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div><div class="video">
					<h4>Larry</h4>
					<iframe width="560" height="315" src="https://www.youtube.com/embed/So55D7nQ3fk" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					<iframe width="560" height="315" src="https://www.youtube.com/embed/m5yTQHriK0c" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div><div class="video">
					<h4>La reina de Inglaterra</h4>
					<iframe width="560" height="315" src="https://www.youtube.com/embed/NDyHTEo75Xs" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
				</section>	
			</article>
			<footer>Todos las imagenes y videos utilizados en esta pagina fueron creadas por Jose Miguel HP-Todos los derechos reservados 2019</footer>
		</div>
	</body>
</html>
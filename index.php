<?php
	include("bits/common.php");
	include("bits/empleos-fns.php");
	include("bits/empleos-db.php");

	$pageKind = "home";

	?>
<!DOCTYPE html>
<html lang="es">
<?php
	$pageTitle = "";
	include ( "bits/_htmlhead.php" );
	?>

<body class="home">

<?php include ( "bits/mainheads.php" ); ?>

<div class="mainbody" id="content">
	<div class="mbody">
	
		<div class="layoutContentEtc">

<div class="colContent">

			<?php // redaccion en tiempo futuro antes del evento
				/*

				<p style="margin-top:16pt;">
					UX2012 es el principal evento profesional en Argentina sobre Experiencia de Usuario, Usabilidad, Diseño de Interacción, Accesibilidad y temáticas relacionadas.
				</p>
				<p>
					La jornada se realizará el día 28 de noviembre de 2012 de 9 a 19 hs. en el Centro Cultural General San Martín de la Ciudad de Buenos Aires, en el marco del Día Mundial de la Usabilidad. Estará orientada a profesionales y estudiantes de diseño, comunicación y desarrollo, que busquen generar una buena experiencia de usuario en sus productos digitales.
				</p>
				
<?php // include ( "bits/boxcall2atn-registrate.php" ); ?>


				<h4>
					Contará con:
				</h4>
				<ul>
					<li>
						<strong>Charlas introductorias</strong>, que brindarán las herramientas y metodologías básicas para incorporar la usabilidad y la accesibilidad en los procesos de diseño y desarrollo de interfaces para productos digitales interactivos.
					</li>
					<li>
						<strong>Charlas avanzadas</strong>, dirigidas a profesionales que quieren perfeccionarse en las técnicas y metodologías que ya utilizan para mejorar la experiencia de sus usuarios.
					</li>
					<li>
						<strong>Talleres</strong> para poner en práctica las técnicas básicas del Diseño Centrado en el Usuario.
					</li>
				</ul>
				
				


			*/ // redaccion en tiempo pasado despues del evento ?>
	


<h2>Sobre UX2012 en el CCGSM</h2>


				<p style="margin-top:16pt;">
					UX2012, realizado el 28 de noviembre de 2012 en el Centro Cultural San Martín en el marco del Día Mundial de la Usabilidad, se estableció como el principal evento profesional en Argentina sobre Experiencia de Usuario, Usabilidad, Diseño de Interacción, Accesibilidad y temáticas relacionadas.
				</p>
				<p>
					La jornada contó con más de 700 inscriptos y 400 asistentes – todos ellos, profesionales y estudiantes de diseño, comunicación y desarrollo, que buscan generar una buena experiencia de usuario en sus productos digitales.
				</p>
				
<?php // include ( "bits/boxcall2atn-registrate.php" ); ?>


				<h4>
					Contó con:
				</h4>
				<ul>
					<li>
						<strong>Charlas introductorias</strong>, que brindaron las herramientas y metodologías básicas para incorporar la usabilidad y la accesibilidad en los procesos de diseño y desarrollo de interfaces para productos digitales interactivos.
					</li>
					<li>
						<strong>Charlas avanzadas</strong>, dirigidas a profesionales que quieran perfeccionarse en las técnicas y metodologías que ya utilizan para mejorar la experiencia de sus usuarios.
					</li>
					<li>
						<strong>Talleres</strong> para poner en práctica las técnicas básicas del Diseño Centrado en el Usuario.
					</li>
				</ul>
				
				

<h2 id="programa">Programa del evento</h2>
<p><span class="pptonline sample">El icono indica las presentaciones con material disponible online.</span></p>


				<table class="programa fixedHeader">

				<thead>
					<tr>
						<th>
						</th>
						<th>Sala C</th>
						<th>Sala Muiño</th>
						<th>Aula 1</th>
						<th>Aula 2</th>
					</tr>
				</thead>

				<tbody>
					<tr>
						<th>9:00</th>
						<td colspan="4">Acreditación</td>
					</tr>

					<tr>
						<th>10:00</th>
						<td class="pptonline"><a href="actividad.php?s=1">Qué podemos aprender los diseñadores de las metodologías ágiles</a> Santiago Bustelo</td>
						<td class="pptonline"><a href="actividad.php?s=2">Innovar desde el diseño de Experiencia de Usuario</a> Ivan Wolcan</td>
						<td class="pptonline"><a href="actividad.php?s=3">Neuropsicología aplicada a la Experiencia de Usuario</a> Diego López Castan</td>
						<td class="pptonline"><a href="actividad.php?s=4">Diseñando storyboards con los usuarios a partir de personas y escenarios</a> Fernando Feller</td>						
					</tr>

					<tr>
						<th>11:00</th>
						<td colspan="4">Break</td>
					</tr>

					<tr>
						<th>11:30</th>
						<td><a href="actividad.php?s=5">Microinteracciones</a> Rodrigo Galindez</td>
						<td><a href="actividad.php?s=6">Tecnologías para la Salud y la Discapacidad</a> Rafael Kohanoff</td>
						<td class="pptonline"><a href="actividad.php?s=7">Sistemas de producto-servicio, experiencias de valor desde una mirada holística</a> Yanina Guerzovich</td>
						<td class="pptonline"><a href="actividad.php?s=8">Cocinando experiencias</a> Sebastián Fernandez Quezada</td>					
					</tr>

					<tr>
						<th>12:30</th>
						<td colspan="4">Receso para almuerzo</td>
					</tr>

					<tr>
						<th>14:00</th>
						<td class="pptonline"><a href="actividad.php?s=9">Accesibilidad práctica con HTML5 + CSS3 + ARIA</a> Manuel Razzari - Camilo Kawerin</td>
						<td class="pptonline"><a href="actividad.php?s=10">7 errores de Diseño de Interacción que afectan la Experiencia de los Usuarios</a> Verónica Traynor</td>
						<td><a href="actividad.php?s=11">Sociología de la Usabilidad: ¿Qué le aporta el diseño de interacción a la sociedad?</a> Lorena Paz</td>
						<td><a href="actividad.php?s=12">Making the Case for Connected Ecosystems</a> Matt Grieco (en inglés) </td>
					</tr>

					<tr>
						<th>15:00</th>
						<td colspan="4">Break</td>								
					</tr>

					<tr>
						<th>15:30</th>
						<td><a href="actividad.php?s=13">Arquitectura de información cross-channel</a> Gonzalo Auza</td>
						<td class="pptonline"><a href="actividad.php?s=14">El diseñador de UX, un especialista con múltiples personalidades</a> Michael Dorka</td>
						<td class="pptonline"><a href="actividad.php?s=15">Periodismo usable</a> Emiliano Cosenza</td>
						<td class="pptonline"><a href="actividad.php?s=16">Casos y Experiencias de un equipo de UX</a> Emiliano Horcada</td>									
					</tr>

					<tr>
						<th>16:30</th>
						<td rowspan="2" class="pptonline"><a href="actividad.php?s=17">Taller de prototipado rápido y testeo de usabilidad con usuarios</a> Guillermo Ermel</td>
						<td colspan="3">Break</td>
					</tr>
					

					<tr>
						<th>17:00</th>
						<td class="pptonline"><a href="actividad.php?s=18">Lean UX</a> Juan Manuel Carraro</td>
						<td><a href="actividad.php?s=19">Los patrones de siempre, las soluciones de hoy</a> Víctor Pezzetti y Sergio Quaroni</td>
						<td><a href="actividad.php?s=20">Observatorio Argentino de Accesibilidad Web</a> Carlos Benavidez</td>															
					</tr>

					<tr>
						<th>18:15</th>
						<td colspan="4">Cierre en Sala C</td>
					</tr>

					
				</tbody>


				</table>


				<object width="640" height="481" id="flickr"> <param name="flashvars" value="offsite=true&lang=en-us&page_show_url=%2Fphotos%2Fdisenoinclusivo%2Fsets%2F72157632223755054%2Fshow%2F&page_show_back_url=%2Fphotos%2Fdisenoinclusivo%2Fsets%2F72157632223755054%2F&set_id=72157632223755054&jump_to="></param> <param name="movie" value="http://www.flickr.com/apps/slideshow/show.swf?v=122138"></param> <param name="allowFullScreen" value="true"></param><embed type="application/x-shockwave-flash" src="http://www.flickr.com/apps/slideshow/show.swf?v=122138" allowFullScreen="true" flashvars="offsite=true&lang=en-us&page_show_url=%2Fphotos%2Fdisenoinclusivo%2Fsets%2F72157632223755054%2Fshow%2F&page_show_back_url=%2Fphotos%2Fdisenoinclusivo%2Fsets%2F72157632223755054%2F&set_id=72157632223755054&jump_to=" width="640" height="481"></embed></object>


<?php // include ( "bits/boxcall2atn-registrate.php" ); ?>

<br />

<?php include ( "bits/mainbody-colctnt-empleos.php" ); ?>

<br />

<?php // include ( "bits/boxcall2atn-registrate.php" ); ?>


			</div>


			
			<?php /* /colContent */ ?>


			<?php include ( "bits/mainbody-coletc-logos.php" ); ?>


		</div><?php /* /layoutContentEtc */ ?>

	</div><?php /* /mbody */ ?>

</div><?php /* /mainbody */ ?>
				

<?php include ( "bits/mainfoot.php" ); ?>


</body>
</html>
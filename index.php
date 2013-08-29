<?php
	include("bits/common.php");
	include("bits/empleos-fns.php");
	include("bits/empleos-db.php");

	$pageKind = "home"; 

	?>
<!DOCTYPE html>
<html lang="es" class="teaser">
<?php
	$pageTitle = "";
	include ( "bits/_htmlhead.php" );
	?>

<body class="home">

<?php include ( "bits/mainheads.php" ); ?>

<div class="mainbody" id="content">
	<div class="mbody">
	
		<div class="layoutContentEtc">
			<div class="organizers">
					<p>Organizado por:</p>
					<img src="img/logos-teaser.png" width="600" height="108" alt="Organizadores: IxDA Buenos Aires, UXPA Argentina, ISOC Argentina">
			</div>
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
	


				

<?php include ( "bits/mainfoot.php" ); ?>


</body>
</html>
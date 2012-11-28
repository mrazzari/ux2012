<?php 
	include("bits/common.php");
	include("bits/actividades-fns.php");
	include("bits/actividades-db.php");
	
	$pageKind = "single";
	
	?><!DOCTYPE html>
<html lang="es">

<?php

	$idSlotActividad = getS();
	
	$pageTitle = getActividadTitle( $idSlotActividad );
	include ( "bits/_htmlhead.php" );
	?>


<body class="single">


<?php include ( "bits/mainheads.php" ); ?>


<div class="mainbody" id="content">
	<div class="mbody">
	
		<div class="layoutContentEtc">
			<div class="colContent">

<?php /*

<h2 class="disertante"><strong>Lorena Paz</strong><br />Socióloga abocada a la Cooperación Tecnológica</h2>
<h2 class="actividad">¿Qué le aporta el diseño de interacción a la sociedad?</h2>

<div class="navActividades">
	<div class="nav1">
		<a href="./#programa" class="programa">&laquo; Programa</a>
		<span class="aula">Aula X, 15:00 hs</span>
	</div>
	<div class="controls"><a href="?id=1"><img src="rsrc/white-arrow-4-22pt.gif" alt="anterior" width="20" height="16" /></a><a href="?id=3"><img src="rsrc/white-arrow-6-22pt.gif" alt="siguiente" width="20" height="16" /></a>
	</div>
</div>

<p style="margin-top:16pt;">
Mi charla realizar&aacute; una introducci&oacute;n sobre el objeto de estudio de la Sociolog&iacute;a en relaci&oacute;n al campo de la Human Computer Interaction.
</p>
<p>Tomando como autor principal al Soci&oacute;logo Georg Simmel, brindar&eacute; un an&aacute;lisis en terminos hist&oacute;ricos de los sucesos compartidos por ambas disciplinas.</p>
<p>Y responder&aacute; las siguientes preguntas: &iquest;que m&eacute;todos toma prestados de las Ciencias Sociales el DCU? &iquest;y c&oacute;mo los adecua, y para qu&eacute; fines? &iquest;Qu&eacute; hay detr&aacute;s de la medici&oacute;n de la experiencia del usuario? &iquest;Qu&eacute; es la eficiencia?, &iquest;Qu&eacute; se mide? &iquest;Qu&eacute; no se mide? &iquest;Para qu&eacute; sirve la usabilidad? &iquest;Para que sirve la accesibilidad? &iquest;para que sirve la inaccesibilidad? Qu&eacute; le aporta la sociolog&iacute;a al dise&ntilde;o de interacci&oacute;n? &iquest;Qu&eacute; le aporta el dise&ntilde;o de interacci&oacute;n a la sociedad?</p>
<p>A tal fin, tomar&eacute; tres autores y sus textos claves: "Un enfoque integrado del Dise&ntilde;o Universal. Para la inclusi&oacute;n de todas las edades, culturas y diversidades&rdquo; de Jim Sandhu, "Los usos de Nielsen: Para una cr&iacute;tica de la ideolog&iacute;a de la usabilidad" de Carlos Scolari y "La din&aacute;mica de las redes tecno-econ&oacute;micas" de Michel Callon.</p>

<div class="fichaDisertante">

	<div class="colFoto">
		<img src="img/staticmap.png" height="120" width="120" />
	</div>

	<div class="colCV">
		<h3>Lorena Paz</h3>
		<p>Y responder&aacute; las siguientes preguntas: &iquest;que m&eacute;todos toma prestados de las Ciencias Sociales el DCU? &iquest;y c&oacute;mo los adecua, y para qu&eacute; fines? &iquest;Qu&eacute; hay detr&aacute;s de la medici&oacute;n de la experiencia del usuario? &iquest;Qu&eacute; es la eficiencia?, &iquest;Qu&eacute; se mide? &iquest;Qu&eacute; no se mide? &iquest;Para qu&eacute; sirve la usabilidad?
		</p>
	</div>

</div>

// fichaDisertante 

*/ 

?>

<?= getActividad( $idSlotActividad ) ; ?>





<?php include ( "bits/boxcall2atn-registrate.php" ); ?>





			</div><?php /* /colContent */ ?>


<?php include ( "bits/mainbody-coletc-logos.php" ); ?>


		</div><?php /* /layoutContentEtc */ ?>


</div><?php /* /mbody */ ?>

</div><?php /* /mainbody */ ?>
				








<?php include ( "bits/mainfoot.php" ); ?>


</body>
</html>
<?php 
	include("bits/common.php");
	include("bits/actividades-fns.php");
	include("bits/actividades-db.php");
	
	$pageKind = "single";
	
	?><html lang="es">

<?php
	
	$pageTitle = "Oferta de empleo"; //getActividadTitle( $idSlotActividad );
	include ( "bits/_htmlhead.php" );
	?>


<body class="single">


<?php include ( "bits/mainheads.php" ); ?>


<div class="mainbody" id="content">
	<div class="mbody">
	
		<div class="layoutContentEtc">
			<div class="colContent">


<h2 class="disertante"><strong>Oferta de empleo</strong></h2>
<h2 class="disertante" style="margin-top:24pt;">
	<span style="font-size:16pt;">Federico Zelechowski <span class="hint1">de</span> <a href="http://www.3818.com.ar/">3818 Buenos Aires</a> <span class="hint1">busca</span></span>
	</h2>
<?php /* <h2 class="disertante"><strong>3818 Buenos Aires</strong><br />Federico Zelechowski</h2> */ ?>
<h2 class="actividad" style="margin-top:18pt;"><span style="font-size:48pt">UX / UI Designer</span><br /><span style="font-size:22pt;">Full-time, Semisenior en Palermo</span></h2>

We are seeking Experience Designers of all levels who have experience connecting customers and brands through intuitive interfaces and trans-formative brand experiences. <br />
<br />
We look for minimalistic look and feel designers who are confortable within the less is more areas.<br />
<br />
<br />
<strong>Desired Skills & Experience</strong><br />
<br />
Responsibilities:<br />
<br />
• Participate in the brainstorming. Know how to collaborate and follow comands from leaders<br />
• Translate abstract concepts into simple and elegant user interfaces<br />
• Create concept models, be aware of ergonomics, wireframes , and detailed schematics.<br />
• Work closely with art director and developers to ensure the solidity of design systems<br />
<br />
Experience & Skills:<br />
<br />
• At least 1+ years experience in an Experience Design role / Web design senior<br />
• A solid understanding of user centered design principles<br />
• Able to develop simple and elegant design approaches to complex design problems<br />
• Able to collaborate actively as part of a multi-disciplinary team<br />
• Multitask role player<br />
• Great social interaction within the group and other people<br />
• Must be organized and able to switch rapidly between different projects in a fast-paced environment <br />
• Be passionate of the web<br />
<br />
Send resume to: <a href="mailto:jobs@3818.com.ar">jobs@3818.com.ar</a>
<br />
<br />
<br />
<strong>Company Description</strong><br />
<br />
3818 is a Digital Agency that translate Experience Design into production of engaging, user-centered, web destinations.<br />
<br />
The emergent latin-american internet market and his rapid growth proved to be a strong basis for a multicultural and multilingual practice, serving both local and international clients. The Buenos Aires localization allow us to keep our rates competitive, while providing top quality services to our clients. <br />
<br />
We craft elegant, semantic and modular code. We’re experts in most modern web technologies, HTML5 , CSS3 and Javascript. We create user-centric, W3C validated, easy to maintain, well-documented interfaces.<br />
<br />
We strongly believe that an effective design job consists mainly in keeping the user interface elements to the bare minimum, until nothing left can interfere with its purpose.<br />
<br />
Our interfaces follow Progressive Enhancement principles, allowing design and behaviours to adapt elegantly and effectively to browser/platforms requirements. We are also very concerned about following accessibility guidelines.<br />
<br />
Our team speak english, french and spanish, and is trained to work remotely with clients and partners while maintaining a high level of reactivity, and a close relationship with them<br />
<br />
The founders and staff's experience gives us the ability to master complex web projects, including foreign languages and complex typographies.




<p class="back">
<a href="empleos.php#empleos">&laquo; ver todas las ofertas de empleo</a>
</p>

<?php /*


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







<?php // include ( "bits/boxcall2atn-registrate.php" ); ?>





			</div><?php /* /colContent */ ?>


<?php include ( "bits/mainbody-coletc-logos.php" ); ?>


		</div><?php /* /layoutContentEtc */ ?>


</div><?php /* /mbody */ ?>

</div><?php /* /mainbody */ ?>
				








<?php include ( "bits/mainfoot.php" ); ?>


</body>
</html>
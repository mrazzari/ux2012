<?php 
	include("bits/common.php");
	include("bits/actividades-fns.php");
	include("bits/actividades-db.php");
	
	$pageKind = "single";
	
	?><html lang="es">

<?php /*<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<link href="favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
	
	<title>UX2012: Jornada de Experiencia de Usuario</title> 
	
	<meta content="" name="keywords">

	<meta content="UX2012: Jornada de Experiencia de Usuario" property="og:title">
	<meta content="http://www.ux2012.com.ar" property="og:url">
	<meta content="UX2012: 28/nov/2012 Centro Cultural San Martín, en el marco del Día Mundial de la Usabilidad. El principal evento profesional en Argentina sobre Experiencia de Usuario, Usabilidad, Diseño de Interacción, Accesibilidad y temáticas relacionadas." property="og:description">

	<link href="rsrc/base.css" media="screen" rel="stylesheet" type="text/css">	
</head>*/ ?>

<?php

	$pageTitle = "Empleos";
	include ( "bits/_htmlhead.php" );
	?>

<body class="single">


<?php include ( "bits/mainheads.php" ); ?>


<div class="mainbody" id="content">
	<div class="mbody">
	
		<div class="layoutContentEtc">
			<div class="colContent">



<h2>Empleos en UX2012</h2>

<p>
Queremos que UX 2012 sea una <strong>oportunidad para conectarnos.</strong> Entre todos podemos hacer que el evento sea mucho m&aacute;s que compartir conocimiento.
</p>

<p>
Podr&aacute;s acercarte a las empresas que nos apoyan y estar&aacute;n ofreciendo empleo. &iexcl;Aprovech&aacute; el networking para conseguir tu pr&oacute;ximo trabajo!
</p>

<h4>Y si sos empresa</h4>

<p>Sumate apoyando el evento y encontrá candidatos para desarrollo, diseño, usabilidad y comunicación. <a href="empleos-publicar.php">sumate y public&aacute; un aviso &raquo;</a>
</p>


<?php // include ( 'bits/boxcall2atn-publicar.php' ); ?>


<br />
<h3 style="font-size:18pt;">Ofertas publicadas</h3>

<div class="box jobpostindex" id="empleos">

<?php // for($i=0; $i<10; $i++) { ?>



	<div class="item">

		<div class="itemphoto">
			<img src="img/foto-federico-zelechowski.jpg" alt="Federico Zelechowski" />
		</div><?php /* /itemphoto */ ?>

		<div class="itemctnt">
			<div class="who">
				<span class="name">Federico Zelechowski</span> 
				de
				<span class="company">3818 Buenos Aires</span>
				busca
			</div ><?php /* /"who" */ ?>
			
			<div class="what">
				<p class="jobtitle"><a href="empleo.php?id=fz3818-1">UX / UI Designer</a></p>
				<p class="jobkind">Full-time, Semisenior en Palermo</p>
			</div><?php /* /what */ ?>
			
		</div><?php /* /itemctnt */ ?>
		
	</div><?php /* /item */ ?>




<?php // }; //end for ?>


</div><?php /* /jobpostindex */ ?>






			</div><?php /* /colContent */ ?>


<?php include ( "bits/mainbody-coletc-logos.php" ); ?>


		</div><?php /* /layoutContentEtc */ ?>


</div><?php /* /mbody */ ?>

</div><?php /* /mainbody */ ?>
				








<?php include ( "bits/mainfoot.php" ); ?>


</body>
</html>
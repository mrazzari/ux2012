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

	$pageTitle = "Sumate como sponsor recruiter y public&aacute; tu aviso";
	include ( "bits/_htmlhead.php" );
	?>
	
<body class="single">


<?php include ( "bits/mainheads.php" ); ?>


<div class="mainbody" id="content">
	<div class="mbody">
	
		<div class="layoutContentEtc">
			<div class="colContent">


<p class="breadcrumb"><a href="./#empleos">Empleos</a> &raquo; Sumate como sponsor recruiter</p>


<h2 style="font-size:24pt;">¡Gracias por querer sponsorear UX 2012!</h2>

<p>
Durante el evento habrá varias oportunidades de networking. Los asistentes podrán aplicar sobre su credencial un sticker que los identifique como profesionales en busca de ofertas laborales.
</p>


<p style="margin-bottom:0">
Como <strong>Sponsor Recruiter,</strong> accedés a: 
</p>

<ul style="margin-top:0;">
	<li style="margin-top:0;">Una credencial personalizada y destacada con tu nombre, empresa,<br />y el perfil que est&aacute;s buscando. </li>
	<li>Además, tu oferta laboral con los datos de contacto que desees, <br />será publicada en la sección <a href="./#empleos">empleos</a> del sitio.</li>
</ul>

<p>
El costo de este sponsorship es de $500 por cada credencial y aviso.  Ten&eacute;s tiempo <strong>hasta el 23 de noviembre de 2012</strong> para sumarte.
</p>

<p>
Los fondos de UX2012 son administrados por la Asociación Civil Res Non Verba.
</p>

<h3>C&oacute;mo sumarse y publicar el aviso:</h3>

<ol>
	<li>Realiza el pago con alguna de estos medios:<br />
		<ul>
			<li class="hatch unhatched ifhatchedline"><strong>Transferencia bancaria</strong> <a href="#instruccionesTransferencia" class="jsHatch small">[ver instrucciones]</a>
				<ul class="ifhatched" id="instruccionesTransferencia">
					<li>Realizá una transferencia de $500 por cada credencial y aviso que desees, a la cuenta de Res Non Verba:<br />
						Banco Santander Río<br />
						CUIT 30707833374<br />
						Cte. $ 127-15655/0<br />
						CBU 07201277 20000001565504
					</li>
				</ul>
				</li>

			<li class="hatch unhatched ifhatchedline"><strong>Tarjeta de cr&eacute;dito o d&eacute;bito (VISA o Mastercard)</strong> <a href="#instruccionesTarjetas" class="jsHatch small">[ver instrucciones]</a>
				<ol class="ifhatched" id="instruccionesTarjetas">
					<li>Ingresá al <a href="https://www.resnonverba.org/forms/v2/rnv/1/espanol/">formulario de donaciones por Tarjeta de Res Non Verba &raquo;</a>.</li>
					<li>Ingresá los datos personales.</li>
					<li>En la sección "AUTORIZO EL DEBITO MENSUAL DE…", seleccioná "Otro monto por única vez", especificando $500 por cada credencial y aviso que desees.</li>
				</ol>
				</li>
			
			<?php /*
			<li class="hatch unhatched ifhatchedline"><strong>Paypal</strong> <a href="#instruccionesPaypal" class="jsHatch small">[ver instrucciones]</a>
				<ol class="ifhatched" id="instruccionesPaypal">
					<li>Ingresá al <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=5529200/">formulario de donaciones PayPal de Res Non Verba &raquo;</a>.</li>
					<li>En el campo "Donation amount" del encabezado del formulario, especificá como valor US$ 105 por cada credencial y aviso que desees.
					<li>Ingresá los datos personales.</li>
					<li>En la sección "AUTORIZO EL DEBITO MENSUAL DE…", seleccioná "Otro monto por única vez", especificando $500 por cada credencial y aviso que desees.</li>
				</ol>	
				</li>
			*/ ?>
			
			<li class="hatch unhatched ifhatchedline"><strong>Efectivo o cheque</strong> <a href="#instruccionesEfectivo" class="jsHatch small">[ver instrucciones]</a>
				<ul class="ifhatched" id="instruccionesEfectivo">
					<li>
					Realizá el pago de $500 por cada credencial y aviso que desees en las oficinas de Res Non Verba, Viamonte 1181 PB, CABA.<br />
					Lunes a Viernes de 10:00hs a 13:00hs, y de 14:00 hs a 17:00hs.<br />
					Cheques a nombre de "Res Non Verba Asociación Civil no a la orden".<br />
					</li>
				</ul>
			</li>
			
		</ul>
	</li>
	<li style="margin-top:10pt;">Envianos un e-mail a <a href="mailto:ux2012ba@gmail.com">ux2012ba@gmail.com</a> con estos datos:
		<ul>
			<li><strong>Datos de tu oferta laboral:</strong>
				<ul>
					<li>Nombre y apellido de la credencial a personalizar.</li>
					<li>Nombre y URL de la empresa.</li>
					<li>Foto avatar para el aviso en el sitio.</li>
					<li>T&iacute;tulo de la oferta laboral (a presentar en el sitio y credencial personalizada).</li>
					<li>Texto del aviso, incluyendo:
						<ul>
							<li>Tipo de empleo ofrecido (freelance, part-time o fulltime).</li>
							<li>Nivel de experiencia (pasantía, junior, semisenior, senior).</li>
							<li>Barrio, ciudad o región.</li>
							<li>Datos de contacto para enviar CVs.</li>
						</ul>
					</li>
				</ul>
			</li>
			<li><strong>Datos del pago: </strong>
				<ul>
					<li>Tarjeta de cr&eacute;dito o d&eacute;bito: nombre y apellido del titular de la tarjeta o cuenta bancaria.</li>
					<li>Transferencia bancaria: adjuntanos el comprobante.</li>
				</ul>
			</li>

		</ul>
	</li>
	<li style="margin-top:10pt;">
	&iexcl;Listo! Publicaremos tu aviso y al acreditarte en el evento, te daremos la credencial para que te conectes con los candidatos. 
	</li>
</ol>


<p>Cualquier consulta, no dudes en escribirnos a <a href="mailto:ux2012ba@gmail.com">ux2012ba@gmail.com</a>.</p>




<p class="back">&laquo; <a href="./#empleos">volver a Empleos</a></p>




			</div><?php /* /colContent */ ?>


<?php include ( "bits/mainbody-coletc-logos.php" ); ?>


		</div><?php /* /layoutContentEtc */ ?>


</div><?php /* /mbody */ ?>

</div><?php /* /mainbody */ ?>
				








<?php include ( "bits/mainfoot.php" ); ?>


</body>
</html>
<?php
// bits/_htmlhead.php
	
	if( $pageTitle == "" ){
		$htmlTitle = "UX2012: Jornada de Experiencia de Usuario";
	}else{
		$htmlTitle = $pageTitle . " &bull; UX2012: Jornada de Experiencia de Usuario";	
	};

?><head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<link href="favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
	
	<title><?= $htmlTitle ?></title> 
	
	<meta content="Experiencia de Usuario, Usabilidad, Diseño de Interacción, Accesibilidad" name="keywords">

	<meta content="UX2012: Jornada de Experiencia de Usuario" property="og:title">
	<meta content="http://www.ux2012.com.ar" property="og:url">
	<meta content="UX2012: 28/nov/2012 Centro Cultural San Martín, en el marco del Día Mundial de la Usabilidad. El principal evento profesional en Argentina sobre Experiencia de Usuario, Usabilidad, Diseño de Interacción, Accesibilidad y temáticas relacionadas." property="og:description">

	<link href="rsrc/base.css" media="screen" rel="stylesheet" type="text/css">	

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
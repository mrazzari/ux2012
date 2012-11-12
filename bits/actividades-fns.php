<?php
/* actividades-fns */


function getS( ){

if(isset($_GET['s'])){
	$s=$_GET['s'];
	}else{
	$s=1;
	}

return $s;
}


function getActividadTitle($s){

global $indiceSlotsActividades, $actividades;

$codigoSlotEnActividades = $indiceSlotsActividades [ $s - 1 ];

$a = $actividades[ $codigoSlotEnActividades ] ;

$html = '';

$html .= $a['nombre'] . ': ' . $a['titulo'] ;

return $html;

};


function getActividad($s){

global $indiceSlotsActividades, $actividades;

// limites de s (indice)

	if( $s > 19 ){ $s = 1; };
	if( $s < 1 ){ $s = 19; };
	
	$prevS = $s - 1 ;
	$nextS = $s + 1 ;
	
	if( $prevS < 1 ){ $prevS = 19; };
	if( $nextS > 19 ){ $nextS = 1; };

//


$codigoSlotEnActividades = $indiceSlotsActividades [ $s - 1 ];

$a = $actividades[ $codigoSlotEnActividades ] ;

$resumen = $a['resumen'];
	$resumen = preg_replace( '/\n[ \t]*\n/i', '</p><p>', $resumen );
	$resumen = preg_replace( '/\n/i', '<br />', $resumen );

$navActividades = '
<div class="navActividades">
	<div class="nav1">
		<a href="./#programa" class="programa">&laquo; Programa</a>
		<span class="aula">' . $a['donde'] . ', ' . $a['horario'] .'</span>
	</div>
	<div class="controls">
		<a href="?s=' . $prevS . '"><img src="rsrc/white-arrow-4-22pt.gif" alt="anterior" width="20" height="16" /></a><a href="?s=' . $nextS . '"><img src="rsrc/white-arrow-6-22pt.gif" alt="siguiente" width="20" height="16" /></a>
	</div>
</div>';


$html = '';

// $html .= '<div class="boxHs">';

$html .= '<h2 class="disertante"><strong>' . $a['nombre']  . '</strong>';

	if ( $a['cargo'] <> '' ) {
		$html .= '<br />' .  $a['cargo'] ;
		}
$html .= '</h2>';


$html .= $navActividades;


$html .= '<h2 class="actividad">' . $a['titulo'] .'</h2>';

// $html .= '</div>';




$html .= '<p style="margin-top:16pt;">';

$html .= $resumen;

$html .= '</p>';

// $html .= $navActividades;

$html .= '<p>&nbsp;</p>';

return $html;

};

?><?php /*


<div class="fichaDisertante">

	<div class="colFoto">
		<img src="img/staticmap.png" height="120" width="120" />
	</div>

	<div class="colCV">
		<h3>Lorena Paz</h3>
		<p>Y responder&aacute; las siguientes preguntas: &iquest;que m&eacute;todos toma prestados de las Ciencias Sociales el DCU? &iquest;y c&oacute;mo los adecua, y para qu&eacute; fines? &iquest;Qu&eacute; hay detr&aacute;s de la medici&oacute;n de la experiencia del usuario? &iquest;Qu&eacute; es la eficiencia?, &iquest;Qu&eacute; se mide? &iquest;Qu&eacute; no se mide? &iquest;Para qu&eacute; sirve la usabilidad?
		</p>
	</div>

</div><!-- fichaDisertante -->

*/ ?>
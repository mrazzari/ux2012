<?php
/* empleos-fns */

function getEmpleoID( ){

	if(isset($_GET['id'])){
		$empleoid=$_GET['id'];
		}else{
		$empleoid='';
		}

	return $empleoid;
	}



function getEmpleoTitle($id){
	global $empleosDB;
	$a = $empleosDB [ $id ]; // array del empleo
	if ( $a == NULL ){ return false; } ;
	
	$html = '';
	$html .= $a['company'] . ': ' ;
	$html .= $a['jobtitle'] . ' ' . $a['jobkind'] ;
	
	return ( $html ); 
	};




function getEmpleoPost( $id ){
	global $empleosDB;
	$a = $empleosDB [ $id ]; // array del empleo
	
	$html = '';
	$html .= '<h2 class="disertante" style="margin-top:24pt;" id="content">
	<span style="font-size:16pt;">' . $a['name'] . ' <span class="hint1">de</span> ';
	
	if($a['companyURL']!=''){
		$html .= '<a href="'. $a['companyURL'] .'">'.$a['company'].'</a>';
		}else{
		$html .= $a['company'] ;
		};
	
	if( $a['busca'] == NULL || $a['busca']!='0' ){ 
		$html .= ' <span class="hint1">busca</span>';
	}
	$html .= '</span></h2>';

	$html .= '<h2 class="actividad" style="margin-top:18pt;line-height:40pt"><span style="font-size:48pt">' . $a['jobtitle'] . '</span><br /><span style="font-size:22pt;">' . $a['jobkind'] . '</span></h2>';
	

	$html .= '<p>';
	
	$post = $a['post'];
		$post = preg_replace( '/\n[ \t]*\n/i', '</p><p>', $post );
		$post = preg_replace( '/\n/i', '<br />', $post );

	$html .= $post;
	$html .= '</p>';
	
	return ( $html ); 
	};
	

?>
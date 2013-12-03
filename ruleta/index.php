<html lang="es">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title>Sorteo UX2013</title>

<style>
BODY{
	font-family: "helvetica neue", helvetica, arial, sans-serif;
	background-color: #81CFE7;(129,​ 207,​ 231)
	font-size:12pt;
	padding:0; margin:0; 
	cursor: pointer;	
}

#boxRandnames{
	text-align:center;
	font-size:96pt;
	line-height:72pt;
	font-weight:bold;
	padding:0 48pt;
}

P.randname, P.randabove, P.randbelow{

	width:90%;
	position:absolute;
	top:36%;
	margin:0;
	
	/*border:1px solid magenta;*/

/*	background:white;*/
background: rgba(129, 207, 231, 0.5);

	/*height:226pt;	*/
	opacity: 0;
}

P.randabove{ 
	margin-top:-72pt;
	/*border:1px solid blue;*/
	}
P.randbelow{ 
	margin-top:72pt; 
	/*border:1px solid red; */
	}


@-webkit-keyframes inout /* Safari and Chrome */
{
0%    {opacity: 0;}
70%   {opacity: 1;}
100%   {opacity: 0;}
}

@-webkit-keyframes inoutsoft /* Safari and Chrome */
{
0%    {opacity: 0;}
50%   {opacity: .2;}
100%   {opacity: 0;}
}

@-webkit-keyframes onlyin /* Safari and Chrome */
{
from {opacity: 0;}
to {opacity: 1;}
}


P.randname.current
{
animation: inout 1s;
-moz-animation: inout 1s; /* Firefox */
-webkit-animation: inout 1s; /* Safari and Chrome */
-o-animation: inout 1s; /* Opera */
}

P.randabove.current, P.randbelow.current{
animation: inoutsoft 1s;
-moz-animation: inoutsoft 1s; /* Firefox */
-webkit-animation: inoutsoft 1s; /* Safari and Chrome */
-o-animation: inoutsoft 1s; /* Opera */
}




P.randname.active{ 
	animation: inout 3s;
	-moz-animation: inout 3s; /* Firefox */
	-webkit-animation: inout 3s; /* Safari and Chrome */
	-o-animation: inout 3s; /* Opera */
	opacity: 1;
	}
	
</style>


<script>
</script>

	
</head>
<body>


<div id="boxRandnames">
	<?php

	$txt = $_SERVER['QUERY_STRING'];
	$txt = preg_replace('/[^a-z]/sim', '', $txt);
	if ($txt) { $txt = "_" . $txt; }

	$nombres = preg_split('/[\r\n]+/', file_get_contents("sorteo" . $txt . ".txt")); 
	$winners = preg_split('/[\r\n]+/', file_get_contents("winners.txt")); 	
	$nombres = array_diff($nombres, $winners);
	shuffle($nombres);

	$limit = min(300, count($nombres)); 
	$winner = mt_rand(0, $limit);

	?><?php
	
	for( $i=0; $i < $limit; $i++ ){
		$class = 'randname';
		if ( $i>100){ $class = " randabove"; }
		if ( $i>200){ $class = " randbelow"; }
		if ($i == $winner){
			$class .= " winner";
			file_put_contents('winners.txt', $nombres[$i] . "\n", FILE_APPEND);
		}
		echo '<p class="' . $class . '" id="rand' . $i . '">' . ( $nombres[$i] ) . '</p>';
	}
	
	?>
</div><!-- /randname -->





<script type="text/javascript" src="scripts/jquery-1.8.2.min.js"></script>

<script type="text/javascript">

globalix = 0;
delayInicial = 500;

for( var i = 0 ; i < 20; i ++ ){
	setTimeout(function () { 
		$( '#rand'+globalix ).addClass ( "current" ) ;
		$( '#rand'+(globalix + 100) ).addClass ( "current" ) ;
		$( '#rand'+(globalix + 200) ).addClass ( "current" ) ;
		globalix ++;
	}, i*250 + delayInicial );			
}

setTimeout(function () { 
	$( '.winner' ).removeClass( "randabove, randbelow" ) ;
	$( '.winner' ).addClass ( "current randname" ) ;
}, ( 4500  + delayInicial ) );

setTimeout(function () { 
	$( '.winner' ).addClass ( "active" ) ;
}, ( 5000  + delayInicial ) );


$("BODY").click(function() {
	location.reload();
})


</script>



</body>
</html>
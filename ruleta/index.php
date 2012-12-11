<html lang="es">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title>Sorteo UX2012</title>

<style>
BODY{
	font-family: "helvetica neue", helvetica, arial, sans-serif;
	background:#fff;
	font-size:12pt;
	padding:0; margin:0; 
	
}

.accent{ color:#ec1c24; }

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
background: rgba(255, 255, 255, 0.5);

	/*height:226pt;	*/

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
	
<p class="randname" style="margin-top:-48pt">
	<span style="font-size:60pt;">
		<span style="margin-left:-.05em;">UX</span><span class="accent">2<span style="letter-spacing:-.05em;">0<span style="letter-spacing:-.1em;">12</span></span></span>
	</span>
	<br />	
	Sorteo
</p>
</div><!-- /randname -->





	<?php /*
		performance enhancement: put scripts at bottom.
		http://developer.yahoo.com/performance/rules.html#js_bottom
		*/ ?>

	<?php /* JQuery Framework */ ?>
	<script type="text/javascript" src="scripts/jquery-1.8.2.min.js"></script>
	


<script type="text/javascript">

$("BODY").click(function() {
	document.location="ruleta.php";
})


</script>



</body>
</html>
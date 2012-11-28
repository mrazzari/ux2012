<?php 
	include("bits/common.php");
	include("bits/empleos-fns.php");
	include("bits/empleos-db.php");

	$pageKind = "single";
	
	?><!DOCTYPE html>
<html lang="es">

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
			
				<?php include ( "bits/mainbody-colctnt-empleos.php" ); ?>
			
			</div><?php /* /colContent */ ?>


<?php include ( "bits/mainbody-coletc-logos.php" ); ?>


		</div><?php /* /layoutContentEtc */ ?>


</div><?php /* /mbody */ ?>

</div><?php /* /mainbody */ ?>
				








<?php include ( "bits/mainfoot.php" ); ?>


</body>
</html>
<h2 id="empleos">Empleos en UX2012</h2>

<p>
UX 2012 es una <strong>oportunidad para conectarnos.</strong> Entre todos pudimos hacer que el evento sea mucho m&aacute;s que compartir conocimiento.
</p>

<p>
Los asistentes tuvieron la oportunidad de acercarse a los profesionales y empresas que <a href="empleos-recruiters.php">apoyaron UX2012</a> ofreciendo empleo en el evento y en esta página.
</p>



<?php // include ( 'bits/boxcall2atn-publicar.php' ); ?>


<br />
<h3 style="font-size:18pt;">Ofertas publicadas</h3>

<div class="box jobpostindex" id="empleos">



<?php
	global $empleosDB;
	
	foreach ( $empleosDB as $a ){
		?>
		

	<div class="item">

		<div class="itemphoto">
			<img src="img/<?= $a['imgsrc'] ?>" alt="<?= $a['name'] ?>" />
		</div><?php /* /itemphoto */ ?>

		<div class="itemctnt">
			<div class="who">
				<span class="name"><?= $a['name'] ?></span> 
				de
				<span class="company"><?= $a['company'] ?></span>

			<?php	if( !isset($a['busca']) || $a['busca']!='0' ){ ?>
				busca
			<?php	}; ?>

			</div ><?php /* /"who" */ ?>
			
			<div class="what">
				<p class="jobtitle"><a href="empleo.php?id=<?= $a['id'] ?>#content"><?= $a['jobtitle'] ?></a></p>
				<p class="jobkind"><?= $a['jobkind'] ?></p>
			</div><?php /* /what */ ?>
			
		</div><?php /* /itemctnt */ ?>
		
	</div><?php /* /item */ ?>



<?php

	} ; //end foreach

?>


</div><?php /* /jobpostindex */ ?>
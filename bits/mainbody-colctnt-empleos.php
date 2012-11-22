<h2 id="empleos">Empleos en UX2012</h2>

<p>
Queremos que UX 2012 sea una <strong>oportunidad para conectarnos.</strong> Entre todos podemos hacer que el evento sea mucho m&aacute;s que compartir conocimiento.
</p>

<p>
Podr&aacute;s acercarte a los profesionales y empresas que nos apoyan y estar&aacute;n ofreciendo empleo. &iexcl;Aprovech&aacute; el networking para conseguir tu pr&oacute;ximo trabajo!
</p>

<h4>Y si necesitás profesionales o freelancers para tu empresa…</h4>

<p>Sumate apoyando el evento y encontrá candidatos para las áreas de diseño, desarrollo, usabilidad y comunicación, <strong><a href="empleos-publicar.php">apoyá UX2012 y public&aacute; un aviso &raquo;</a></strong>
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

			<?php	if( $a['busca'] == NULL || $a['busca']!='0' ){ ?>
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

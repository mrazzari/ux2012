<?php /* mainfoot.php */ ?>


<div class="mainfoot">

</div><?php /* /mainfoot */ ?>

	<?php /*
		performance enhancement: put scripts at bottom.
		http://developer.yahoo.com/performance/rules.html#js_bottom
		*/ ?>

	<?php /* JQuery Framework */ ?>
	<script type="text/javascript" src="scripts/jquery-1.8.2.min.js"></script>
	
	<?php /* JQuery Plugins */ ?>
	<script type="text/javascript" src="scripts/jquery-plugins/jquery.form-validation-and-hints.js"></script>
	<script type="text/javascript" src="scripts/jquery-plugins/fixed-table-header.js"></script>

	<?php /* UX2012 scripts */ ?>
	<script type="text/javascript" src="scripts/sitescripts.js"></script>


<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36065808-1']);
  _gaq.push(['_setDomainName', 'ux2012.com.ar']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>


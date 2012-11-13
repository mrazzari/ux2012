// common.js

$(document).ready(function() {

	$('.fixedHeader').fixedtableheader();

	$('.jsHatch').click(function(event) {
		event.preventDefault();
		var hatch = $(this).closest('.hatch');
		$(hatch).toggleClass('unhatched').toggleClass('hatched');
	});
		
	
});

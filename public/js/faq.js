$('#show-answers').click(function(event) {
	event.preventDefault();
	$('dd').slideToggle();
});

$('ul').each(function() {
	$(this).children().first().css('font-weight', 'bold');
});

$('h3').click(function() {
	$(this).next('ul').slideToggle();
});

$('h3').css('cursor','pointer');
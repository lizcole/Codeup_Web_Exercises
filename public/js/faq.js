$('#show-answers').click(function(event) {
	event.preventDefault();
	$('dd').toggleClass('invisible');
});

$('ul').each(function() {
	$(this).children().first().css('font-weight', 'bold');
});

$('ul').click(function(event) {
	event.preventDefault();
	$(this).children().css('display', 'none');
});

$('li').css('cursor','pointer');
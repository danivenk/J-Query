$(document).ready(function() {
	var unitCount = 5;
	var selectedID = false;
	
	for (var i = 0; i < unitCount; i++) {
		$('.nav').append(' |<a href="#u' + (i+1) + '">&nbsp;&nbsp;Unit ' + (i+1) + '</a>');
	}
	
	$('select option').click(function() {
		selectedID = $(this).attr('id');
		window.location.href = 'toktok.js';
	});
	
	
	$('.toTop').hide();
	$('.help').hide();
	
	var wereldcrisis = $('.contentStart').offset().top;
	
	$(window).scroll(function() {
        if($(window).scrollTop() > wereldcrisis) {
            $(".toTop").show();
        } else if ($(window).scrollTop() < wereldcrisis) {
			$('.toTop').hide();
		}
    });
	
	$('.toTop a').click(function(e) {
		e.preventDefault();
		$('.help').show();
	});
	
	$('.close a').click(function(e) {
		e.preventDefault();
		$('.help').hide();
	});
});
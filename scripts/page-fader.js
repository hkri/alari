//smooth scroll function.
var $fader = $('.fader');
var $a = $('a:not(.active)');
function fadePage(){
	//Fade in page
	$fader.stop().animate({opacity: 0}, 800, function(){
		$fader.css('display', 'none');
	});	


	//disable default link click event.
	//Fade page when navigating on next page.
	$a.click(function(event){
		var href = $(this).attr('href');
		$fader.css('display', 'block');
		$fader.stop().animate({opacity: 1}, 500, function(){
			location.href = href;
		});
		return false;
	});
}
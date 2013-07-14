$(document).ready(function(){	
	$('.table_of_contents ul li a').click(function(event){
	
		var el = $(this).attr('href');
		var elWrapped = $(el);
		console.log(el);
		scrollToDiv(elWrapped, 110);

		
		return false;
	
	});
	
	function scrollToDiv(element,navheight){
	
		var offset = element.offset();
		var offsetTop = offset.top;

		console.log(offsetTop);

		var totalScroll = offsetTop-navheight;
		
		$('body,html').animate({
				scrollTop: totalScroll
		}, 500);
	
	}	
	
});

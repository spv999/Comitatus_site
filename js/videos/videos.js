(function($){
	
})(jQuery);

function play(url){
	$("#videoFrame").attr("src", url);
	
    $('html,body').animate({ scrollTop: $("#videoFrame").offset().top - 5 });
    e.preventDefault();
	
}



jQuery(function($){
	$("body").scrollspy({ target: '.home-header' });
	$(".home-header .nav li").click(function(){
		var $content = $($(this).find("a").attr("href"));
		$("body").animate({scrollTop:$content.offset().top - 80 - ($("#wpadminbar").height()||0)});
		return false;
	});
});
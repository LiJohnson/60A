jQuery(function($){
	var offset =  80 + ($("#wpadminbar").height()||0);
	$("body").scrollspy({ target: '.home-header' , offset : offset });
	$(".home-header .nav li").click(function(){
		var $content = $($(this).find("a").attr("href"));
		$("body").animate({scrollTop:$content.offset().top - offset },600,'easeOutBack');
		//return false;
	});
});
jQuery(function($){
	var offset =  80 + ($("#wpadminbar").height()||0);
	var scrollTo = function(id){
		var $content = $(id);
		$content.length && $("body").animate({scrollTop:$content.offset().top - offset+5 },600, $.easing.easeOutBack ? 'easeOutBack' : 'swing');
	};
	$("body").scrollspy({ target: '.home-header' , offset : offset });
	$(".home-header .nav li").click(function(){
		scrollTo($(this).find("a").attr("href"));
	});
	location.hash && scrollTo(location.hash);

	//product
	(function(){
		var $product = $("#product");
		$product.find(".portfolio-list li").hover(function(){
			$(this).find(".content").show();
		},function(){
			$(this).find(".content").hide();
		});
	})();
});
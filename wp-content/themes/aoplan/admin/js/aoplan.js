jQuery(function($){
	var $form = $("form[name=aoplan-title]");
	var save = (function(){
		var timeId = 0;
		return function(){
			timeId && clearTimeout(timeId);
			timeId = setTimeout(function(){
				$form.find("#tip").tip("保存中...");
				$form.postData(ajaxurl,{action:"aoplanUpdateTitle"},function(data){
					$.log(data);
					$form.find("#tip").tip("保存成功");
				});
			},300);
		};
	})();
	$form.find("input").change(function(){
		save();
	});
});

//tip
(function($) {
	if (!$) return;
	$.fn.getPosition = function() {
		var el = this[0]
		return $.extend({}, (typeof el.getBoundingClientRect == 'function') ? el.getBoundingClientRect() : {
			width: el.offsetWidth,
			height: el.offsetHeight
		}, this.offset());
	};
	
	$.fn.tip = function(text , timeout , cb ){
		if($.isFunction(timeout)){
			 cb = timeout;
			 timeout = 1000;
		}
		cb = $.isFunction(cb) ? cb : function(){};
		timeout = timeout*1 || 1000;
		var $this = this;
		this.each(function(){
			var $this = $(this);
			var $tip = $("<div class=tip ></div>").html($("<div class=text></div>").html(text));
			$this.after($tip);
			var pos = $this.getPosition();

			var tipWidth = $tip[0].offsetWidth
			var tipHeight = $tip[0].offsetHeight
			var css = {top: pos.top -tipHeight , left: pos.left + pos.width / 2 - tipWidth / 2};
			$tip.offset(css);
			$tip.animate({opacity:1});
			var hide = function(){
				$tip.animate({opacity:0,top:"-="+tipHeight},function(){
					$tip.remove();
					cb.call($this,$tip);
				});
			};
			timeout > 0 && setTimeout(hide,timeout);
			
			$tip.click(hide);
		});
		return this;
	};
})(window.jQuery);
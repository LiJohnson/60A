jQuery(function($){
	var $form = $("form[name=aoplan-title]");
	var save = (function(){
		var timeId = 0;
		return function(){
			timeId && clearTimeout(timeId);
			timeId = setTimeout(function(){
				$form.postData(ajaxurl,{action:"aoplanUpdateTitle"},function(data){
					$form.find("#tip").tip("保存成功");
				});
			},300);
		};
	})();
	$form.find("input").change(function(){
		save();
	});

	//product
	var $productForm = $("form#product");
	$productForm.find("input[type=button]").media(function(att){
		$.log(att.attributes.url);
		$productForm.find("input[name=pic]").val(att.attributes.url);
		$productForm.find("img").prop("src",att.attributes.url);
	});

	//gallery
	var $gallery = $("form#gallery");
	$gallery.find("input[type=button]").media(function(att){
		$gallery.find("input[name=pic]").val(att.attributes.url);
	});
	
});

//jquery plugin
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

	$.fn.media = (function(){
		var wpMedia = false;
		return function(cb,eventType){
			eventType = eventType || "click";
			this.on(eventType,function(){
				wpMedia = wp.media().open().on("select",function(e){
					cb && cb.call(wpMedia,wpMedia.state().get('selection').first());
				});
			});
		};
	})();
})(window.jQuery);
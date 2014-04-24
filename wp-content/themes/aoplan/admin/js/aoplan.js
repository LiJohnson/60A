jQuery(function($){
	var $form = $("form[name=aoplan-title]")
	$form.find("input").change(function(){
		$form.postData(ajaxurl,{action:"aoplanUpdateTitle"},function(data){
			$.log(data);
		});
	});
})